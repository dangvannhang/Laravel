<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table='products';

    function type_product() {
        return $this->hasMany('App\TypeProduct','id_type','id');
    }
}
