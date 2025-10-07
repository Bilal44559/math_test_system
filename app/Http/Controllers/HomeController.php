<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Admin\ProductController;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $products = Product::where('is_active', true)->get();
        return view('home', compact('products'));
    }
    public function index()
    {
        $products = Product::where('is_active', true)->get();
        return view('home', compact('products'));
    }
}
