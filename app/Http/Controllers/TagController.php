<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
class TagController extends Controller
{
    //
    public function index(){
        // ver todas las etiquetas dentro del blog

    }

    public function show(Tag $tag){
        $categories = Category::latest()->take(6)->get();
        $recent_posts = Post::latest()->take(6)->get();
        $tags = Tag::latest()->take(50)->get();
        return view('blog.tags',[
            'posts' => $tag->posts()->paginate(10),
            'recent_posts' => $recent_posts,
            'categories'=>$categories,
            'tags'=>$tags,
            'tag'=>$tag
        ]);
       
    }
}
