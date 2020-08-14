<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table='products';

    function typeProduct() {
        return $this->hasmany('App\TypePRoduct','id_type','id');
    }
}
