<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Validation\Rule;

class AdminProjectController extends Controller
{
    public function index()
    {
        //much simpler to have admin tools on main view
        return redirect('/projects');
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store()
    {
        $attributes = $this->validateProject();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');

        Project::create($attributes);

        return redirect('/');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', ['project' => $project]);
    }

    public function update(Project $project)
    {
        $attributes = $this->validateProject($project);

        if ($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');
        }

        $project->update($attributes);

        return back()->with('success', 'Project Updated!');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return back()->with('success', 'Project Deleted!');
    }

    protected function validateProject(?Project $project = null)
    {
        $project ??= new Project();

        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => $project->exists ? ['image'] : ['required', 'image'],
            'slug' => ['required', Rule::unique('projects', 'slug')->ignore($project->id)],
            'body' => 'required',
            'technologies' => 'required',
            'links' => 'required',
        ]);

        //convert technologies to an array
        $attributes['technologies'] = explode(",", $attributes['technologies']);
        //convert links to an associative array
        $links = [];
        foreach ($attributes['links'] as $key => $item) {
            //even keys are names, odd keys are refs
            if ($key % 2 == 0) {
                array_push($links, ['name' => $item, 'ref' => $attributes['links'][$key + 1]]);
            } else {
                continue;
            }
        }

        $attributes['links'] = $links;

        return $attributes;
    }
}
