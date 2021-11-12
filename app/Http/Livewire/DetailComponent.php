<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Cart;
use Livewire\Component;

class DetailComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->$slug = $slug;
    }

    public function shop($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $popular_products = Product::inRandomOrder()->limit(5)->get();
        return view('livewire.detail-component', ['product' => $product, 'popular_products' => $popular_products])->layout('layouts.base');
    }
}