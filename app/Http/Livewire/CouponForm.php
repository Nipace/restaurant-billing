<?php

namespace App\Http\Livewire;

use App\Coupon;
use Livewire\Component;

class CouponForm extends Component
{
    public $coupon='';


    public function mount(){
        $this->coupon='';
    }
    public function applyCoupon(){

        $couponCode=$this->coupon;
        $couponData=Coupon::where('code',$couponCode)->where('status',1)->first();
        if(!$couponData){
            session()->flash('error', 'no coupon found');
            return back();
        }

        // add single condition on a cart bases
    $condition = new \Darryldecode\Cart\CartCondition(array(
    'name' => $couponData->name,
    'type' => $couponData->type,
    'target' => 'total', 
    'value' => $couponData->value,
    
	    ));
    \Cart::session(auth()->id())->condition($condition);
    $this->emit('couponApplied');
    }
    public function render()
    {
        return view('livewire.coupon-form');
    }
}
