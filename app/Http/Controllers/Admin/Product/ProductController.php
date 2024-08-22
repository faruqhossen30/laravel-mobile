<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product\Product;
use App\Models\Product\ProductAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands        = Brand::all();
        $categories    = Category::get();

        return view('admin.product.create', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        if ($request->sliders) {
            $imgs = [];
            foreach ($request->sliders as $key => $slider) {
                if (array_key_exists($key, $request->sliders)) {
                    $file_name = $request->file('sliders')[$key]->store('product/slider');
                    $imgs[] =   $file_name;
                }
            }
        }
        $data = [
            'category_id'       => $request->category_id,
            'title'             => $request->title,
            'slug'              => Str::slug($request->title),
            'description'       => $request->description,
            'short_description' => $request->short_description,
            'price'             => $request->price,
            'status'            => $request->status,
            'brand_id'          => $request->brand_id,
            'author_id'         => Auth::user()->id,
            'meta_title'        => $request->meta_title,
            'slider'            => json_encode($imgs),
            'meta_description'  => $request->meta_description,
            'meta_keyword'      => 'keyword',
            'status'            => $request->status,
        ];
        if ($request->file('thumbnail')) {
            $file_name = $request->file('thumbnail')->store('product/thumbnail');
            $data['thumbnail'] = $file_name;
        }
        $product   =  Product::create($data);

        if ($product && $request->attribute_value) {
            foreach ($request->attribute_value as $key => $attribute) {
                ProductAttribute::create([
                    'product_id' => $product->id,
                    'attribute_value_id' => $attribute
                ]);
            }
        }

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::with('categories')->firstWhere('id', $id);
        $categories = Category::get();
        $brands = Brand::get();

        $cat_ids = $product->categories->pluck('id')->toArray();

        return view('admin.product.edit',compact('product','categories','brands'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required'
        ]);

        if ($request->sliders) {
            $imgs = [];
            foreach ($request->sliders as $key => $slider) {
                if (array_key_exists($key, $request->sliders)) {
                    $file_name = $request->file('sliders')[$key]->store('product/slider');
                    $imgs[] =   $file_name;
                }
            }
        }
        $data = [
            'category_id'       => $request->category_id,
            'title'             => $request->title,
            'slug'              => Str::slug($request->title),
            'description'       => $request->description,
            'short_description' => $request->short_description,
            'price'             => $request->price,
            'status'            => $request->status,
            'brand_id'          => $request->brand_id,
            'author_id'         => Auth::user()->id,
            'meta_title'        => $request->meta_title,
            'slider'            => json_decode($imgs),
            'meta_description'  => $request->meta_description,
            'meta_keyword'      => 'keyword',
            'status'            => $request->status,

        ];

        if ($request->file('thumbnail')) {
            $file_name = $request->file('thumbnail')->store('product/thumbnail');
            $data['thumbnail'] = $file_name;
        }

        $product = Product::firstWhere('id', $id)->update($data);

        if ($product && $request->attribute_value) {
            foreach ($request->attribute_value as $key => $attribute) {
                ProductAttribute::create([
                    'product_id' => $product->id,
                    'attribute_value_id' => $attribute
                ]);
            }
        }
        Session::flash('create');
        return redirect()->route('portfolio.index');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
