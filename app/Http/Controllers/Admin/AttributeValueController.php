<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $attribute = Attribute::with('values')->firstWhere('id', $id);

        // return $attribute;
        return view('admin.attribute.value.create', compact('attribute'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {

        AttributeValue::create([
            'attribute_id'=> $id,
            'name'=> $request->name,
            'slug' =>Str::slug($request->name),
            'description'=> $request->name,
            'author_id'=> Auth::user()->id,
        ]);

        return redirect()->back();
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
        $attribute = Attribute::with('values')->firstWhere('id', $id);
        // return $attribute;
        return view('admin.attribute.value.create', compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // return $request->all();
         $request->validate([
            'name' => 'required'
        ]);

        AttributeValue::firstWhere('id', $id)->update([
            'name' => $request->name,
            'slug' =>Str::slug($request->name),

        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $value = AttributeValue::firstWhere('id', $id);
        $value->delete();

        return redirect()->back();
    }
}
