<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attributes = Attribute::paginate();
        return view('admin.attribute.index', compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.attribute.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'sort' => $request->sort,
            'author_id' => Auth::user()->id,
        ];


        if ($request->file('icon')) {
            $file_name = $request->file('icon')->store('attribute/icon/');
            $data['icon'] = $file_name;
        }


        Attribute::create($data);
        return redirect()->route('attribute.index');
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
        $attribute = Attribute::firstWhere('id', $id);
        return view('admin.attribute.edit', compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'sort' => $request->sort,
            'author_id' => Auth::user()->id,
        ];


        if ($request->file('icon')) {
            $file_name = $request->file('icon')->store('attribute/icon/');
            $data['icon'] = $file_name;
        }


        Attribute::firstWhere('id', $id)->update($data);
        return redirect()->route('attribute.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Attribute::where('id', $id)->delete();
        return redirect()->route('attribute.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function ajaxSearch()
    {
        $attributes = Attribute::get();

        $response = array();
        foreach ($attributes as $attr) {
            $response[] = array(
                'id'    => $attr->id,
                'text'  => $attr->name,
            );
        }
        return response()->json($response);
    }

    public function ajaxAttributeValueSearch(Request $request)
    {
        // dd($request->all());
        // $attributes = AttributeValue::get();

        $search = $request->search;
        if ($search == '') {
            $attributes = AttributeValue::where('attribute_id', $request->id)->get();
        } else {
            $attributes = AttributeValue::where('attribute_id', $request->id)->where('name', 'like', '%' . $search . '%')->limit(15)->get();
        }


        $response = array();
        foreach ($attributes as $attr) {
            $response[] = array(
                'id'    => $attr->id,
                'text'  => $attr->name,
            );
        }
        return response()->json($response);
    }
}
