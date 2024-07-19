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

        $brands = Brand::orderBy('name', 'asc')->get();


        return view('products',compact('products','brands'));
    }
    public function singleProduct($slug)
    {
        $product = Product::with(['brand','items.attribute'])->firstWhere('slug', $slug);
        $list = $product->items;
        $attributes = collect($product->items)->unique('attribute_id')->values()->all();

        $data = collect([]);
        foreach($attributes as $key=> $item){
                $attribute = [];
                $attribute['id'] = $item->attribute->id;
                $attribute['sort'] = $item->attribute->sort;
                $attribute['name'] = $item->attribute->name;
                $attribute['slug'] = $item->attribute->slug;
                $attribute['items'] = $list->where('attribute_id', $item->attribute->id)->select('id','name','slug','description')->sortBy(['id', 'asc'])->values()->all();
                $data[] = $attribute;
        }
        $data = $data->sortBy('sort')->values()->all();
        return view('productpage', compact('product','data'));
    }
}
