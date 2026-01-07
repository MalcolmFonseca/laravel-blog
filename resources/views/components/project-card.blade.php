@props(['project'])

<li class="Project Container">
    <div class="ProjectTitle">
        <h2><?= $project->title ?></h2>
    </div>
    @if ($project->thumbnail)
        <img src="{{ asset('storage/' . $project->thumbnail) }}" width="800" height="600" />
    @else
        <img src="https://placehold.net/600x400.png" width="600" height="400" />
    @endif
    <div class="ProjectInfo">
        {{-- <p><a href="/blog/?user=<?= $project->user->username ?>"><?= 'By: ' . $project->user->name ?></a></p>
        <p><a href="/blog/?category=<?= $project->category->slug ?>"><?= ucfirst($project->category->name) ?></a></p> --}}
    </div>
    <div><?= $project->excerpt ?></div>
    @if (request()->user()?->can('admin'))
        <div class="AdminTools">
            <a href="/admin/projects/{{ $project->id }}" class="DarkContainer">Edit</a>
            <form action="/admin/projects/{{ $project->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="DarkContainer">Delete</button>
            </form>
        </div>
    @endif
</li>
