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

        // return $category;

        // return $category;
        $posts = Post::when($orderby, function ($query, $orderby) {
            return $query->orderBy('id', $orderby);
        })
            ->paginate($per_page ?? 9);

        $categories = Category::all();
        // return $latestnews;
        return view('posts', compact('posts', 'categories'));
    }
}
