<?php

namespace App\Http\Controllers;

use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index', ['categories' => Category::latest()->paginate(20)]);
    }
}
