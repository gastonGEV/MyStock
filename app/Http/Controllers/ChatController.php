<?php

namespace MyStock\Http\Controllers;

use MyStock\Product;
use MyStock\Http\Resources\Chat as ChatResource;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index($id) {
        
        if ($id == 0) {
            $products = Product::orderBy('created_at','desc')->take(10)->get()->reverse();
        }else {
            $products = Product::skip($id-10)->take(10)->get()->reverse();
        }
        return new ChatResource($products);
    }
}
