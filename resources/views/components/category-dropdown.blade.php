<x-dropdown>
    <x-slot name="trigger">
        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
    </x-slot>
    <a href="/blog">All</a>
    @foreach ($categories as $category)
        <a href="/blog/?category={{ $category->slug }}">{{ ucwords($category->name) }}</a>
    @endforeach
</x-dropdown>
