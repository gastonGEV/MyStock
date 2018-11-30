<?php

namespace MyStock\Http\Controllers;

use MyStock\Product;
use MyStock\Http\Resources\ProductResource;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index($id) {
        $array = [];

        if ($id == 0) {
            $products = Product::take(10)->get();
        }else {
            $products = Product::skip($id)->take(10)->get();
        }

        foreach ($products as $product) {
            $filter = new ProductResource($product);
            array_push($array, $filter);
        }
        if (empty($array)) {
            return 'No existen mas elementos en la BD';
        }
        return $array;
    }
}
