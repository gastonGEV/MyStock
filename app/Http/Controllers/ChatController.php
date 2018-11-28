<?php

namespace MyStock\Http\Controllers;

use MyStock\Product;
use MyStock\Http\Resources\ProductResource;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index($id) {
        
        if ($id == 0) {
            $products = Product::take(10)->get();
        }else {
            $products = Product::skip($id)->take(10)->get();
        }
        return new ProductResource($products);
    }
}
