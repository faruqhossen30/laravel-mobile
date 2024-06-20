<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::latest()->paginate(10);
        return view('admin.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
            ]
        );

        $data = [
            'name'      => $request->name,
            'slug'      => Str::slug($request->name),
            'author_id' => Auth::user()->id,
            'status'    => $request->status,

        ];

        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('brand/thumbnail/');
            $data['thumbnail'] = $file_name;
        }

        Brand::create($data);
        return redirect()->route('brand.index');
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
        $brand = Brand::where('id', $id)->first();
        return view('admin.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'name'        => 'required',
            ]
        );
        $data = [
            'name'      => $request->name,
            'slug'      => Str::slug($request->name),
            'author_id' => Auth::user()->id,
            'status'    => $request->status,
        ];

        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('brand/thumbnail/');
            $data['thumbnail'] = $file_name;
        }
        Brand::where('id', $id)->update($data);
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Brand::where('id', $id)->delete();
        return redirect()->route('brand.index');
    }
}
