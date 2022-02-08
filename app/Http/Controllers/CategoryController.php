<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
class CategoryController extends Controller
{
    //
    public function index(){
        // ver todas las categorias dentro del blog

    }

    public function show(Category $category){
        $categories = Category::latest()->take(6)->get();
        $recent_posts = Post::latest()->take(6)->get();
        $tags = Tag::all();
        return view('blog.categories',[
            'posts' => $category->posts()->paginate(10),
            'recent_posts' => $recent_posts,
            'categories'=>$categories,
            'tags'=>$tags
        ]);
    }
}
