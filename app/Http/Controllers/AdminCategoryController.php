<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Validation\Rule;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index', ['categories' => Category::latest()->paginate(20)]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', Rule::unique('categories', 'name')],
            'slug' => ['required', Rule::unique('categories', 'slug')],
        ]);

        Category::create($attributes);

        return redirect('/admin/categories');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(Category $category)
    {
        $attributes = request()->validate([
            'name' => ['required', Rule::unique('categories', 'name')->ignore($category->id)],
            'slug' => ['required', Rule::unique('categories', 'slug')->ignore($category->id)],
        ]);

        $category->update($attributes);

        return redirect('/admin/categories')->with('success', 'Category Updated!');
    }

    public function destroy(Category $category)
    {
        if ($category->posts()->exists()) {
            return back()->withErrors(['Category' => 'Cannot delete a category being used by a post']);
        }

        $category->delete();

        return back()->with('success', 'Category Deleted!');
    }
}
