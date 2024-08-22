<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostPageController extends Controller
{
    public function postPage()
    {

        $per_page = null;
        if (isset($_GET['per_page']) && $_GET['per_page']) {
            $per_page = $_GET['per_page'];
        }
        $orderby = null;
        if (isset($_GET['orderby']) && $_GET['orderby']) {
            $orderby = $_GET['orderby'];
        }
        // $news = null;
        // $latestnews = $request->news;
        $orderby = null;
        if (isset($_GET['orderby']) && $_GET['orderby']) {
            $orderby = $_GET['orderby'];
        }
        $category = null;
        if (isset($_GET['category']) && $_GET['category']) {
            $category = $_GET['category'];
        }

        // return $orderby;
        $posts = Post::when($orderby, function ($query, $orderby) {
            return $query->orderBy('id', $orderby);
        })->when($category, function ($query, $category) {
            $query->whereHas('categories', function ($query) use ($category) {
                $query->whereIn('category_id', $category);
            });
        })->paginate($per_page ?? 9);

        $categories = Category::all();
        // return $latestnews;
        return view('posts', compact('posts', 'categories'));
    }


    public function singlePage($slug)
    {
        $post = Post::firstWhere('slug', $slug);
        return view('single-post', compact('post'));
    }
}
