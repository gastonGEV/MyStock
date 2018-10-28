<?php

namespace MyStock\Http\Controllers;

use Illuminate\Http\Request;
use MyStock\Combo; 

class ComboController extends Controller
{
    public function index() {
      
        $combos = Combo::all();

        return view('combo.index', compact('combos'));
    }

    public function show(Request $request) {
        
        //return $request->all();

        $aux = (int) $request->input('combo');

        $combo = Combo::find($aux);

        $products = Combo::find($aux)->products()->get();

        return view('combo.show', compact('combo','products'));
    }
}
