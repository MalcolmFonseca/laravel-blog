<x-dropdown>
    <x-slot name="trigger">
        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
    </x-slot>
    <a href="/blog?{{ http_build_query(request()->except('category', 'page')) }}">All</a>
    @foreach ($categories as $category)
        <a
            href="/blog/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}">{{ ucwords($category->name) }}</a>
    @endforeach
</x-dropdown>
