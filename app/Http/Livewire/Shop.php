<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;

class Shop extends Component
{
    // public $arr;
    public $products;
    public $search;
    // protected $listeners = ['searched' => 'search', 'checked' => 'check'];
    public function mounted($products)
    {
        $this->products = $products;
        // $this->arr = $products;
    }
    public function getProductsProperty()
    {
        return $this->products;
    }
    public function searching($search = "")
    {

        $this->products = Product::query()->where('title', "like", "%$search%")->get();
    }
    public function check($check)
    {
        count($check) > 0 ? $this->products = Product::query()->whereIn('category_id', $check)->get() : $this->products = Product::all();
    }
    public function render()
    {
        return view('livewire.shop', ['categories' => Category::all()]);
    }
}
