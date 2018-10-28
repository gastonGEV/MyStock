<?php

namespace MyStock;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function stock() {  //en laravel definis las funciones de dicho modelo
        return $this->belongsTo('MyStock\Stock');
    }

    public function type() {
        return $this->belongsTo('MyStock\TypeProduct');
    }

    public function combos() {
        return $this->belongsToMany('MyStock\Combo')->withPivot('cant_product');
    }

}
