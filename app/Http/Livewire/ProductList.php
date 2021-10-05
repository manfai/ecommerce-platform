<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    // public function mount()
    // {
    //     dd($this->products);
    // }
    
    public function render()
    {
        $products = Product::paginate(8);
        return view('livewire.product-list',['products'=>$products]);
    }
    
}
