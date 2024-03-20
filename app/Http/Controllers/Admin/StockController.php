<?php

namespace App\Http\Controllers\Admin;

use App\Food;
use App\FoodStock;
use App\Http\Controllers\Controller;
use App\Stock;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return (Stock::all());
        $stocks = Stock::orderBy('from_date', 'desc')->whereDate('from_date', '>=', Carbon::today())->get();
        return view('pages.stock.index')->with('stocks', $stocks)->with('today', Carbon::today());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.stock.create')->with('foods', Food::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $request->validate([
            'from_date' => 'required',
            'food_id' => 'required',
            'quantity'=>'required'
        ]);
        if(Carbon::today()->format('Y-m-d')>$request->from_date){
            toastr()->error('You cannot set the stock before today','Oops!!!');

            return back();
        }
        $previousStock = Stock::where('food_id', $request->food_id)->whereDate('from_date', $request->from_date)->first();
        // dd($previousStock);
        if ($previousStock) {
            toastr()->error('Stock Already Created.', 'Oops!!!');


            return back();
        } else {

            Stock::create([
                'food_id' => $request->food_id,
                'total_quantity' => $request->quantity,
                'remaining_quantity' => $request->quantity,
                'from_date' => $request->from_date,
                'to_date' => $request->from_date,

            ]);
        }


        toastr()->success('Stock Saved Successfully.', 'Finally!!!');


        return redirect(route('stocks.index'));

        // $foods=Food::all();

        // $i=0;
        // // dd($request);
        // foreach($foods as $food){
        //         Stock::create([
        //             'food_id'=>$request->food_id[$i],
        //             'quantity'=>$request->quantity[$i],
        //             'from_date'=>$request->from_date,
        //             'to_date'=>$request->to_date,
        //         ]);
        //         $i++;
        // }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        $food = $stock->food('name');
        $foods = Food::all();
        return view('pages.stock.edit', compact('stock', 'food', 'foods'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        // dd($request->update_quantity);
        if (intval($request->update_quantity) < 0) {
            if (-$stock->remaining_quantity > intval($request->update_quantity)) {
                toastr()->error('The value must be greater than or equal to ' . -$stock->remaining_quantity, 'Oops!!!');
                return redirect()->back();
            } else {
                $stock->update([
                    'total_quantity' => $stock->total_quantity + $request->update_quantity,
                    'remaining_quantity' => $stock->remaining_quantity + $request->update_quantity
                ]);
                toastr()->success('Stock Updated Successfully', 'Finally!!!');

                return redirect(route('stocks.index'));
            }
        } else {
            $stock->update([
                'total_quantity' => $stock->total_quantity + $request->update_quantity,
                'remaining_quantity' => $stock->remaining_quantity + $request->update_quantity
            ]);
            toastr()->success('stock updated successfully');

            return redirect(route('stocks.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        $stock->delete();

        toastr()->success('Stock Deleted Successfully.', 'Successfully!!!');


        return redirect(route('stocks.index'));
    }
}
