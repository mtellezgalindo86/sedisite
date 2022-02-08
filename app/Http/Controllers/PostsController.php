<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class PostsController extends Controller
{
    //
    public function show(Post $post)
    {
        $categories = Category::latest()->take(6)->get();
        $recent_posts = Post::latest()->take(6)->get();
        $tags = Tag::all();
        return view(
            'posts',
            [
                'post' => $post,
                'recent_posts' => $recent_posts,
                'categories' => $categories,
                'tags' => $tags
            ]
        );
    }
}
