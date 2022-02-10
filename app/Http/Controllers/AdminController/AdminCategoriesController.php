<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $rules = [
        'name' => 'required|min:3|max:30',
        'slug' => 'required|unique:categories,slug'
    ];
    public function index()
    {
        //
        return view('admin_dashboard.categories.index',[
            'categories' => Category::orderBy('id','DESC')->paginate(50),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin_dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $validated = $request->validate($this->rules);
        Category::create($validated);
        return redirect()->route('sediadministrador.categories.create')->with('success', 'La categoría ha sido creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        return view('admin_dashboard.categories.show',[
            'category' => $category
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view('admin_dashboard.categories.edit',[
            'category' => $category
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $this->rules['slug'] = ['required', Rule::unique('categories')->ignore($category->slug)];
        $validated = $request->validate($this->rules);
        $category->update($validated);
        return redirect()->route('sediadministrador.categories.edit',$category)->with('success', 'La categoría ha sido actualizada');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $default_category_id = Category::where('name','Sin categoria')->first()->id;
        if ($category->name === 'Sin categoria') {
            abort(404);
        }
        $category->posts()->update(['category_id'=> $default_category_id]);
        $category->delete();
        return redirect()->route('sediadministrador.categories.index')->with('success', 'La categoría ha sido eliminada');

    }
}
