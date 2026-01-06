<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index', [
            'posts' => Post::latest()->filter(['category' => 'project', ...request(['search', 'category', 'user'])])->paginate(6)->withQueryString(),
        ]);
    }
}
