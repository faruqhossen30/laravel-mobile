<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductPageController extends Controller
{
    public function products()
    {

        $per_page = null;
        if (isset($_GET['per_page']) && $_GET['per_page']) {
            $per_page = $_GET['per_page'];
        }

        $view = null;
        if (isset($_GET['view']) && $_GET['view']) {
            $view = $_GET['view'];
        }

        $orderby = null;
        if (isset($_GET['orderby']) && $_GET['orderby']) {
            $orderby = $_GET['orderby'];
        }

        $brandids = null;
        if (isset($_GET['brandids']) && $_GET['brandids']) {
            $brandids = $_GET['brandids'];
        }
        $catids = null;
        if (isset($_GET['catids']) && $_GET['catids']) {
            $catids = $_GET['catids'];
        }
        $valueids = null;
        if (isset($_GET['valueids']) && $_GET['valueids']) {
            $valueids = $_GET['valueids'];
        }

        // return $valuequery;

        $keyword = null;
        if (isset($_GET['keyword'])) {
            $keyword = trim($_GET['keyword']);
        }
        $products = Product::with('categories', 'brand')->when($orderby, function ($query, $orderby) {
            return $query->orderBy('id', $orderby);
        })->when($keyword, function ($query, $keyword) {
            return $query->where('title', 'like', '%' . $keyword . '%');
        })->when($brandids, function ($query, $brandids) {
            $query->whereHas('brand', function ($query) use ($brandids) {
                $query->whereIn('brand_id', $brandids);
            });
        })->when($catids, function ($query, $catids) {
            $query->whereHas('categories', function ($query) use ($catids) {
                $query->whereIn('category_id', $catids);
            });
        })->when($valueids, function ($query, $valueids) {
            $query->whereHas('items', function ($query) use ($valueids) {
                $query->whereIn('attribute_value_id', $valueids);
            });
        })

            ->paginate($per_page ?? 9);

        // return  $products;

        $brands = Brand::orderBy('name', 'asc')->get();
        $categories = Category::orderBy('name', 'asc')->get();
        $attributes = Attribute::with('values')->orderBy('name', 'asc')->get();

        // return $attributes;

        return view($view == 'list' ? 'productslist' : 'products', compact('products', 'brands', 'categories', 'attributes'));
    }
    public function singleProduct($slug)
    {
        $product = Product::with(['brand', 'items.attribute'])->firstWhere('slug', $slug);
        $list = $product->items;
        $attributes = collect($product->items)->unique('attribute_id')->values()->all();

        $compare = null;
        if (isset($_GET['compare'])) {
            $compare = trim($_GET['compare']);
        }
        // return $list;

        // Session::store('product1_session')->put('product_id', $compare);
        // $product1_id = Session::store('product1_session')->get('product_id');
        // $image = json_decode($product->slider);
        // return  $image;
        // return gettype($product->slider);
        // return $product->slider;
            $data = collect([]);
        foreach ($attributes as $key => $item) {
            $attribute = [];
            $attribute['id'] = $item->attribute->id;
            $attribute['sort'] = $item->attribute->sort;
            $attribute['name'] = $item->attribute->name;
            $attribute['slug'] = $item->attribute->slug;
            $attribute['items'] = $list->where('attribute_id', $item->attribute->id)->select('id', 'name', 'slug', 'description')->sortBy(['id', 'asc'])->values()->all();
            $data[] = $attribute;
        }
        $data = $data->sortBy('sort')->values()->all();
        return view('productpage', compact('product', 'data'));
    }
}
