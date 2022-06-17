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

        $posts = Post::paginate(12);
        dd($posts);
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
