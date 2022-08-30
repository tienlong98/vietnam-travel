<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
class CartComponent extends Component
{
    public function increaseQuantity($rowId){
        $tour = Cart::get($rowId);
        $qty=$tour->qty + 1;
        Cart::update($rowId, $qty);
    }
    public function decreaseQuantity($rowId){
        $tour = Cart::get($rowId);
        $qty=$tour->qty - 1;
        Cart::update($rowId, $qty);
    }
    public function destroy($rowId){
        Cart::remove($rowId);
        session()->flash('message_succeed', 'Succeed');
    }
    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
