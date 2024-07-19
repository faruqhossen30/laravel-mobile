<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title'               => 'required',
                'short_description'   => 'required',
                'description'         => 'required',
                'description'         => 'required',
                'status'              => 'required',
            ]
        );
        $data = [
            'title'             => $request->title,
            'slug'              => Str::slug($request->title, '-'),
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'user_id'           => Auth::user()->id,
            'meta_title'        => $request->meta_title,
            'meta_description'  => $request->meta_description,
            'meta_keyword'     => json_encode($request->meta_keywords),
            'status'            => $request->status
        ];

        if ($request->file('thumbnail')) {
            $file_name = $request->file('thumbnail')->store('thumbnail/post/');
            $data['thumbnail'] = $file_name;
        }

        $post = Post::create($data);

        if (!empty($request->category_ids)) {
            foreach ($request->category_ids as $id) {
                PostCategory::create([
                    'post_id' => $post->id,
                    'category_id' => $id
                ]);
            }
        }
        Session::flash('create');
        return redirect()->route('post.index')->with('create', 'Post successfully created');

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
        $post = Post::with('categories')->firstWhere('id', $id);
        $categories = Category::get();

        $cat_ids = $post->categories->pluck('id')->toArray();


        // return  $cat_ids;
        return view('admin.post.edit', compact('categories', 'post', 'cat_ids',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'title'               => 'required',
                'short_description'   => 'required',
                'description'         => 'required',
                'description'         => 'required',
                'status'              => 'required',
            ]
        );

        $data = [
            'title'             => $request->title,
            'slug'              => Str::slug($request->title, '-'),
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'user_id'           => Auth::user()->id,
            'meta_title'        => $request->meta_title,
            'meta_description'  => $request->meta_description,
            'meta_keyword'     => json_encode($request->meta_keywords),
            'status'            => $request->status
        ];

        if ($request->file('thumbnail')) {
            $file_name = $request->file('thumbnail')->store('thumbnail/blog/');
            $data['thumbnail'] = $file_name;
        }

        $post = Post::firstWhere('id', $id)->update($data);

        if (!empty($request->category_ids)) {
            PostCategory::where('post_id', $id)->delete();
            foreach ($request->category_ids as $cat) {
                PostCategory::create([
                    'post_id' => $id,
                    'category_id' => $cat
                ]);
            }
        }



        Session::flash('warning');
        return redirect()->route('post.index')->with('warning', ' Post Successfully Updated');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        Storage::delete($post->thumbnail);
        $post->delete();
        return redirect()->route('post.index')->with('success', 'data successfully Deleted');
    }
}
