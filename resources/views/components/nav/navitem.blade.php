@props(['name', 'form' => false])

<li>
    @if ($form)
    <form action='{{$name}}' method="post">
        @csrf
        <button type="submit">{{ucwords($name)}}</button>
    </form>
    @else
    <a href="/{{ $name }}">{{ ucwords($name) }}</a>
    @endif
</li>
