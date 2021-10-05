<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;
    public $user;
    public $favored = false;

    public function mount(Product $product)
    {
        $this->product = $product;
        if(Auth::check()){
            $this->user = User::find(auth()->user()->id);
            if ($this->user->favoriteProducts()->find($this->product->id)) {
            $this->favored = true;
            }
        }
    }

    public function render()
    {
        return view('livewire.product-detail');
    }

    public function favor()
    {
        if(Auth::check()){
            $this->user->favoriteProducts()->attach($this->product);
        } else {
            return redirect()->route('login');
        }
    }

    public function disfavor()
    {
        if(Auth::check()){
            $this->user->favoriteProducts()->detach($this->product);
        } else {
            return redirect()->route('login');
        }
    }
}
