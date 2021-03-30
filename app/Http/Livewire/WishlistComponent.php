<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
class WishlistComponent extends Component
{
    public function removeFromWishList($product_id)
    {

        foreach (Cart::instance('wish-list')->content() as $witem) {
            if($witem->id == $product_id){
                Cart::instance('wish-list')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component','refreshComponent');
                return;
            }
        }

    }

    public function moveProductFromWishListToCart($rowId)
    {

        
        $item = Cart::instance('wish-list')->get($rowId);
        Cart::instance('wish-list')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->name,1, $item->price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component','refreshComponent');
        $this->emitTo('cartlist-count-component','refreshComponent');
         

    }
    public function render()
    {
        return view('livewire.wishlist-component')->layout('layouts.base');
    }
}
