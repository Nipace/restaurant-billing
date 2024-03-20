<?php

namespace App\Http\Livewire;

use App\Food;
use App\Table;
use App\Stock;
use Carbon\Carbon;
use Darryldecode\Cart\Cart;
use Livewire\Component;

class RestaurantBillCart extends Component
{
    public $foods = [];
    public $cartItems = [];
    public $searchTerm;
    public $tables=[];

    protected $listeners = ['couponApplied' => 'onCouponApplied'];

    public function mount()
    {
        // dd(Stock::whereDate('from_date', Carbon::today())->where('remaining_quantity', '>', 0)->get());
        // $this->stocks = Stock::whereDate('from_date', Carbon::today())->where('remaining_quantity', '>', 0)->get();
        $this->foods=Food::all();
        $this->tables=Table::all();
        // dd($this->stocks);
        $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();
    }
    public function clearCoupon()
    {
        \Cart::session(auth()->id())->clearCartConditions();
        $this->mount();
    }
    public function onCouponApplied()
    {
        $this->mount();
    }

    public function addToCart($id)
    {
        $food = Food::findOrFail($id);
        \Cart::session(auth()->id())->add(array(
            'id' => $food->id,
            'name' => $food->name,
            'price' => $food->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $food,
        ));
        // dd(\Cart::session(auth()->id())->getContent());

        $this->emit('alert', ['type' => 'success', 'message' => 'Item added to cart.']);

        $this->mount();
    }
    public function subToCart($id)
    {
        \Cart::session(auth()->id())->update($id, array(
            'quantity' => -1,
        ));

        $this->mount();
    }

    public function removeCart($id)
    {
        \Cart::session(auth()->id())->remove($id);
        $this->mount();
    }
    // public function applyCoupon(){
    //     // add single condition on a cart bases
    // $condition = new \Darryldecode\Cart\CartCondition(array(
    // 'name' => 'PROMO',
    // 'type' => 'tax',
    // 'target' => 'total',
    // 'value' => '-12.5%',

    //     ));
    // \Cart::session(auth()->id())->condition($condition);
    // }

    public function render()
    {

        $searchTerm = '%' . $this->searchTerm . '%';
        $foods = Food::where('name', 'like', $searchTerm)->get();

        $this->foods = $foods;
        // if ($foods) {


        //     foreach ($foods as $food_id) {
        //         $stock = Stock::where('food_id', $food_id)->whereDate('from_date', Carbon::today())->where('remaining_quantity', '>', 0)->first();

        //         if (!$stock == null) {
        //             array_push($stocks, $stock);
        //         }
        //     }

        //     $this->stocks = collect($stocks);
        // } else {
        //     $this->stocks = Stock::whereDate('from_date', Carbon::today())->where('remaining_quantity', '>', 0)->get();
        // }
        $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();
        return view('livewire.restaurant-bill-cart');
    }
}
// protected $listeners=['cartUpdated'=>'onCartUpdate','cartDeleted'=>'onCartDelete'];

// public function onCartUpdate(){
//     $this->cartItems=\Cart::session(auth()->id())->getContent()->toArray();

// }
// public function onCartDelete(){
//     $this->cartItems=\Cart::session(auth()->id())->getContent()->toArray();

// }

// public function onSearch()
    // {

    //     if (!empty($this->searchTerm)) {

    //         $searchTerm = '%' . $this->searchTerm . '%';
    //         $foods = Food::where('name', 'like', $searchTerm)->pluck('id');

    //         $stocks = [];
    //         if ($foods) {


    //             foreach ($foods as $food_id) {
    //                 $stock = Stock::where('food_id', $food_id)->whereDate('from_date', Carbon::today())->where('remaining_quantity', '>', 0)->first();

    //                 if (!$stock == null) {
    //                     array_push($stocks, $stock);
    //                 }
    //             }

    //             $this->stocks = collect($stocks);
    //         } else {
    //             $this->stocks = Stock::whereDate('from_date', Carbon::today())->where('remaining_quantity', '>', 0)->get();
    //         }
    //     } else {

    //         $this->stocks = Stock::whereDate('from_date', Carbon::today())->where('remaining_quantity', '>', 0)->get();
    //     }
    // }
