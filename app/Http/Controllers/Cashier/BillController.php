<?php

namespace App\Http\Controllers\Cashier;

use App\Food;
use App\FoodOrder;
use App\Http\Controllers\Controller;
use App\Order;
use App\Scheme;
use App\Stock;
use Carbon\Carbon;
use Illuminate\Http\Request;
use charlieuki\ReceiptPrinter\ReceiptPrinter as ReceiptPrinter;
use App\Setting;
class BillController extends Controller
{
    // public function index(){
    //     return view('pages.billing.index')->with('foods',Food::all());
    // }

    public function index()
    {
        return view('pages.billing.index')->with('foods', Food::all());
    }

    public function checkout(Request $request)
    {
        // dd(\Cart::session(auth()->id())->getContent());
        // return $request;
        $discount=0;
        if($request->discount){
            if($request->discount<0&&$request->discount>0){
                return redirect()->back();
            }
            $discount=($request->discount)/100;
        }else{
            $discount=0;
        }
        $items = \Cart::session(auth()->id())->getContent();
        if ($items->count() === 0) {
            return redirect()->back();
        }
        foreach ($items as $item) {
            
                if ($request->has('scheme')) {
                    $status = true;
                } else {
                    $status = false;
                }
                $scheme = Scheme::where('food_id', $item->id)->whereDate('start_date', '<=', Carbon::today())->whereDate('end_date', '>=', Carbon::today())->first();
                if ($scheme && $status) {
                    $add_quantity = intval($item->quantity / $scheme->quantity);
                    // dd($add_quantity);
                } else {
                    $add_quantity = 0;
                }
                
            
            $scheme_quantity[] = $add_quantity;
        }
        // $i = 0;

        // foreach ($items as $item) {
        //     $stock = Stock::where('food_id', $item->id)->whereDate('from_date', Carbon::today())->first();
        //     $stock->remaining_quantity = $stock->remaining_quantity - ($item->quantity + $scheme_quantity[$i]);
        //     $stock->save();
        //     $i++;
        // }



        $lastOrder = Order::orderBy('created_at', 'desc')->whereDate('created_at', Carbon::today())->first();
        if ($lastOrder) {
            $token_no = $lastOrder->token_no + 1;
        } else {
            $token_no = 1;
        }
        
        $discountAmount=$discount* \Cart::session(auth()->id())->getSubTotal();
        $order = Order::create([
            'user_id' => auth()->id(),
            'grand_total' =>\Cart::session(auth()->id())->getSubTotal()-$discount* \Cart::session(auth()->id())->getSubTotal(),
            'sub_total' => \Cart::session(auth()->id())->getTotal(),
            'token_no' => $token_no,
            'table'=>$request->table
        ]);
        $i = 0;

        foreach ($items as $item) {
            FoodOrder::create([
                'food_id' => $item->id,
                'order_id' => $order->id,
                'price' => $item->price,
                'quantity' => $item->quantity,
                'scheme' => $scheme_quantity[$i]
            ]);
            $i++;
        }
        // dd($scheme_quantity);


        $cartConditions = \Cart::session(auth()->id())->getConditions();



        $scheme_quantity[] = [];
        $foods = $order->foods;


        \Cart::session(auth()->id())->clear();
        \Cart::session(auth()->id())->clearCartConditions();
        $table=$request->table;
        return view('pages.billing.bill', compact('order', 'items', 'cartConditions', 'foods','discountAmount','table'));
    }

    public function search(Request $request){
        $searchTerm = '%'.$request->search.'%';

        $foods=Food::where('name','like',$searchTerm)->pluck('id');
        $stocks=[];
        foreach($foods as $food_id){
            $stock=Stock::where('food_id',$food_id)->whereDate('from_date',Carbon::today())->where('remaining_quantity','>',0)->get();
            
      
            if($stock->count()==0){
            
         
            }else{
                array_push($stocks,$stock);

            }
            return view('pages.billing.index')->with('foods');

        }
  
        return $stocks;
    
}
public function print(Request $request)
{
    
    $data = [];
    $items = [];
    foreach ($request->foods['name'] as $key => $food) {
        $data['name'] = $request->foods['name'][$key];
        $data['qty'] = $request->foods['quantity'][$key];
        $data['price'] = $request->foods['price'][$key];
        $items[] = $data;
    }
$mid = '';
$store_name = Setting::pluck('restaurant_name')->first();
$store_address = env('RESTAURANT_ADDRESS');
$store_phone = env('RESTAURANT_PHONE');
$store_email = env('RESTAURANT_EMAIL');
$store_website = env('RESTAURANT_WEBSITE');
$tax_percentage = 0;
$transaction_id = "";

$printer = new ReceiptPrinter;
$printer->init(
    config('receiptprinter.connector_type'),
    config('receiptprinter.connector_descriptor'),
    config('receiptprinter.connector_port')
);
$printer->setStore($mid, $store_name, $store_address, $store_phone, $store_email, $store_website);

foreach ($items as $item) {
    $printer->addItem(
        $item['name'],
        $item['qty'],
        $item['price']
    );
}
$printer->setTax($tax_percentage);

// $printer->calculateSubTotal();
$printer->calculateGrandTotal();

// $printer->setTransactionID($transaction_id);

// $printer->setQRcode([
//     'tid' => $transaction_id,
// ]);
$printer->printReceipt();

        \Cart::session(auth()->id())->clear();
        \Cart::session(auth()->id())->clearCartConditions();
    return redirect('/billing');

}
}
