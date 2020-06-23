<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\TypeProduct;
use App\Product;

class PageController extends Controller
{
    //
    function getSlide() {

        $slide =Slide::all();
        $new_product= Product::where('new','1')->paginate(4);
        $top_product=Product::where('promotion_price','<>',0)->paginate(4);
        return view('page.trangchu', compact('slide','new_product','top_product'));
    }
}
