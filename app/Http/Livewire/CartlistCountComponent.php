<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartlistCountComponent extends Component
{
    protected $listeners = ['refreshComponent'=>'$refresh'];
    public function render()
    {
        return view('livewire.cartlist-count-component');
    }
}
