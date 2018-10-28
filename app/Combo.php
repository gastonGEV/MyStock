<?php

namespace MyStock;

use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    protected $guarded = [];

    public function products() {
        return $this->belongsToMany('MyStock\Product')->withPivot('cant_product');
    }
}
