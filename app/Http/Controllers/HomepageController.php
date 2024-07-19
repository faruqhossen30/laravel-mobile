<?php

namespace App\Http\Controllers;

use App\Models\Product\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function Homepage() {
        $products = Product::paginate();
        return view('homepage', compact('products'));
    }
}
