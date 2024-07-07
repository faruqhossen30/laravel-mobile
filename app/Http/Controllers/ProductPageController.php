<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function products()
    {

        $per_page = null;
        if (isset($_GET['per_page']) && $_GET['per_page']) {
            $per_page = $_GET['per_page'];
        }


        $orderby = null;
        if (isset($_GET['orderby']) && $_GET['orderby']) {
            $orderby = $_GET['orderby'];
        }

        $products = Product::when($orderby, function ($query, $orderby) {
            return $query->orderBy('id', $orderby);
        })->paginate($per_page ?? 9);

        $brands = Brand::latest()->get();


        return view('products',compact('products','brands'));
    }
    public function singleProduct()
    {
        return view('productpage');
    }
}
