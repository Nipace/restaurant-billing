<?php

namespace App\Http\Controllers\cashier;

use App\Food;
use App\FoodOrder;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Food $food)
    {
        \Cart::session(auth()->id())->add(array(
            'id' => $food->id,
            'name' => $food->name,
            'price' => $food->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $food
        ));
        return redirect()->route('cart.index');
    }

    public function index(){

        $cartItems=\Cart::session(auth()->id())->getContent();
        return view('pages.cart.index',compact('cartItems'));
    }
    public function destroy($itemId){
        $cartItems=\Cart::session(auth()->id())->remove($itemId);
        return back();
    }

    public function update(Request $request , $rowId){
        \Cart::session(auth()->id())->update($rowId,[
            'quantity' =>array(
                'relative' => false,
                'value' => $request->quantity
                )
        ]);
        return back();

    }

   
}
