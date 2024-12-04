<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class StoreFront extends Component
{
    /**
     * Collection of products.
     *
     * @return \Illuminate\Database\Eloquent\Collection<\App\Models\Product>
     */
    public function getProductsProperty()
    {
        return Product::query()->get();
    }

    public function render()
    {
        return view('livewire.store-front');
    }
}
