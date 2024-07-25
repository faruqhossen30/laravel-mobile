<?php

namespace App\Http\Controllers;

use App\Models\Product\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function Homepage() {
        $products = Product::paginate();
        $latestproduct = Product::latest()->take(3)->get();

        // return  $latestproduct;
        return view('homepage', compact('products','latestproduct'));
    }
}
