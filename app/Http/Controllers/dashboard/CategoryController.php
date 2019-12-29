<?php

namespace App\Http\Controllers\dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryPost;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard.category.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.category.create',['category' => new Category()]);
    }

    public function store(StoreCategoryPost $request)
    {
        Category::create($request->validated());
        return back()->with('status', 'Categoria creada con exito!');
    }
 
    public function show(Category $category)
    {
        return view('dashboard.category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('dashboard.category.edit', compact('category'));
    }

    public function update(StoreCategoryPost $request, Category $category)
    {
        $category->update($request->validated());
        return back()->with('status', 'Categoria actualizada con exito!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('status', 'Categoria eliminada con exito!');
    }
}
