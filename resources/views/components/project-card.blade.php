@props(['project'])

<li class="PostCard Container">
    @if ($project->thumbnail)
        <img src="{{ asset('storage/' . $project->thumbnail) }}" width="600" height="400" />
    @else
        <img src="https://placehold.net/600x400.png" width="600" height="400" />
    @endif
    <div class="PostInfo">
        <div class="ProjectTech">
            @foreach ($project->technologies as $technology)
                <p>{{ ucwords($technology) }}</p>
            @endforeach
        </div>
        <h2 class="PostTitle"><?= $project->title ?></h2>
        <div class="PostExcerpt">{{ $project->body }}</div>
        <hr>
        <div class="ProjectLinks">
            @foreach ($project->links as $link)
                <a href="{{ $link['ref'] }}" target="_blank">{{ $link['name'] }}</a>
            @endforeach
        </div>
    </div>
    @if (request()->user()?->can('admin'))
        <div class="AdminTools">
            <a href="/admin/projects/{{ $project->id }}" class="Button">Edit</a>
            <form action="/admin/projects/{{ $project->id }}" method="POST">
                @csrf
                @method('DELETE')
                <x-form.delete-button />
            </form>
        </div>
    @endif
</li>
