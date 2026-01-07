@props(['project'])

<li class="Post Container">
    @if ($project->thumbnail)
        <img src="{{ asset('storage/' . $project->thumbnail) }}" width="600" height="400" />
    @else
        <img src="https://placehold.net/600x400.png" width="600" height="400" />
    @endif
    <div class="PostTitle">
        <h2><?= $project->title ?></h2>
    </div>
    <div>
        <div>
            <div>{{ $project->body }}</div>
        </div>
        <div class="ProjectTech">
            @foreach ($project->technologies as $technology)
                <p>{{ $technology }}</p>
            @endforeach
        </div>
        <div class="ProjectLinks">
            @foreach ($project->links as $link)
                <a href="{{ $link['ref'] }}">{{ $link['name'] }}</a>
            @endforeach
        </div>
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
