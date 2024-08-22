<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCompareController extends Controller
{
    public function productCompare() {


        $productid = session()->has('productid');
        return   $productid;
        return view('productcompare');

    }
}
