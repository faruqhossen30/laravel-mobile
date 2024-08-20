<?php

namespace App\Http\Controllers;

use App\Models\Product\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request) {
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        // সার্চ কোয়েরি যেখানে দাম রেঞ্জের মধ্যে হতে হবে
        $results = Product::whereBetween('price', [$minPrice, $maxPrice])->get();

        return view('testtwo', compact('results'));
    }
}
