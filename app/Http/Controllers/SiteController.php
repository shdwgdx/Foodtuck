<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Products;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('index', ['products' => Product::all()]);
    }

    public function shop()
    {
        return view('pages.shop', ['products' => Product::all()]);
    }
    public function menu()
    {
        return view('pages.menu',);
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contacts()
    {
        return view('pages.contacts');
    }
}
