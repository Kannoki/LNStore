<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class DetailComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->$slug = $slug;
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        return view('livewire.detail-component', ['product' => $product])->layout('layouts.base');
    }
}