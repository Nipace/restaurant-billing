<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartDeleteForm extends Component
{
    public $item=[];
    public function mount($item){
        $this->item =$item;

    }
    public function deleteCart(){
        // dd($this->item['id']);
    \Cart::session(auth()->id())->remove($this->item['id']);

        
        $this->emit('cartDeleted');
    }
    public function render()
    {
        return view('livewire.cart-delete-form');
    }

}
