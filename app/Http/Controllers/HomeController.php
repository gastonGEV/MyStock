<?php

namespace MyStock\Http\Controllers;

use Illuminate\Http\Request;
use MyStock\Product;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::select('products.*', 'stocks.cant')
        // ->join('stocks', 'stocks.id', '=' , 'products.id')
        // ->get();

        $products = Product::all();
        
        return view('fakerView', compact('products'));
    }
}
