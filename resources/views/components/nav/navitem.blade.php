@props(['name', 'form' => false, 'link_args' => ''])

<li>
    @if ($form)
        <form action='{{ '/' . $name }}' method="post">
            @csrf
            <button type="submit">{{ ucwords($name) }}</button>
        </form>
    @else
        <a href="/{{ $name . $link_args }}">{{ ucwords($name) }}</a>
    @endif
</li>
