<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $products;
    public $search;
    // protected $listeners = ['searched' => 'search', 'checked' => 'check'];
    // public function mounted($products)
    // {
    //     $this->products = $products;
    // }
    // public function search($search = "")
    // {

    //     $this->products = Product::query()->where('title', "like", "%$search%")->get();
    // }
    // public function check($check)
    // {
    //     count($check) > 0 ? $this->products = Product::query()->whereIn('category_id', $check)->get() : $this->products = Product::all();
    // }


    public function render()
    {
        return view('livewire.products',);
    }
}
