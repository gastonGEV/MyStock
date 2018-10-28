<?php

namespace MyStock;

use Illuminate\Database\Eloquent\Model;

class ProCombo extends Model
{
    protected $table = 'combo_product';
   protected $guarded = [];

//    public function products() {
//         return $this->belongsTo('MyStock\Product');
//     }

}
