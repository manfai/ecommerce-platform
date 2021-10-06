<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class WishList extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::paginate(4);
        return view('livewire.wish-list',['products'=>$products]);
    }
}
