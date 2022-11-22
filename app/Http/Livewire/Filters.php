<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Filters extends Component
{

    public function search($search)
    {
        $this->emitTo('products', 'searched', $search);
    }
    public function check($check)
    {
        $this->emitTo('products', 'checked', $check);
    }
    public function render()
    {
        return view('livewire.filters', ['categories' => Category::all()]);
    }
}
