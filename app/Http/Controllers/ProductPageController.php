<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function products()
    {
        return view('products');
    }
    public function singleProduct()
    {
        return view('productpage');
    }
}
