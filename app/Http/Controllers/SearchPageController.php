<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class SearchPageController extends Controller
{
    public function index()
    {
        $per_page = null;
        if (isset($_GET['per_page']) && $_GET['per_page']) {
            $per_page = $_GET['per_page'];
        }


        $orderby = null;
        if (isset($_GET['orderby']) && $_GET['orderby']) {
            $orderby = $_GET['orderby'];
        }
        $minprice = null;
        if (isset($_GET['minprice'])) {
            $minprice = trim($_GET['minprice']);
        }
        $maxprice = null;
        if (isset($_GET['maxprice'])) {
            $maxprice = trim($_GET['maxprice']);
        }
        $keyword = null;
        if (isset($_GET['keyword'])) {
            $keyword = trim($_GET['keyword']);
        }



        $products = Product::when($orderby, function ($query, $orderby) {
            return $query->orderBy('id', $orderby);
        })->when($keyword, function ($query, $keyword) {
            return $query->where('title', 'like', '%' . $keyword . '%');
        })->whereBetween('price',[ $minprice, $maxprice])

        ->paginate($per_page ?? 9);

        // return  $products;
        $brands = Brand::orderBy('name', 'asc')->get();
        return view('productlistpage', compact('brands', 'products'));
    }
}
