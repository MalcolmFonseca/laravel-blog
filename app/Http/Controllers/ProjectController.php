<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::latest()->filter(request(['search']))->paginate(6)->withQueryString(),
        ]);
    }
}
