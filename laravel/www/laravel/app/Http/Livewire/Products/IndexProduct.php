<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

class IndexProduct extends Component
{
    public function render()
    {
        return view('livewire.products.index-product');
            // ->layout('layouts.app')
            // ->slot('body');
    }
}
