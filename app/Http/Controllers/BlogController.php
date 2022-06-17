<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
class BlogController extends Controller
{
    //
    public function index()
    {
        set_time_limit(0);
        $posts = Post::paginate(10);
        return view('blog.blog')->with('posts',$posts);
    }

    public function show(Post $post)
    {
        $categories = Category::latest()->take(6)->get();
        $recent_posts = Post::latest()->take(6)->get();
        $tags = Tag::all();
        return view('blog.detailblog')
                ->with('recent_posts',$recent_posts)
                ->with('categories', $categories)
                ->with('tags', $tags)->with('post', $post);
    }
}
