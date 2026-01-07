@extends('layout')

@section('content')
    <h1 class="PageTitle">My Projects</h1>
    <div id="BlogTitleBar">
        @if (request()->user()?->can('admin'))
            <p class="Container"><a href="/admin/projects/create">New Project</a></p>
        @else
            <div></div>
        @endif
        <div id="PostFilters">
            <form method="GET" action="#" id="PostSearch">
                <input type="text" name="search" placeholder="Search" value="{{ request('search') }}" class="Container" />
            </form>
        </div>
    </div>
    @if ($projects->count())
        <ul id="PostList">
            @foreach ($projects as $project)
                <x-project-card :project=$project />
            @endforeach
        </ul>
        {{ $projects->links() }}
    @else
        <p>No posts yet...</p>
    @endif
@endsection
