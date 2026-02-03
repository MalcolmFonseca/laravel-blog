@props(['image' => null, 'name' => ''])

@if ($image)
    <img class="ProfileImage" src="{{ asset('storage/' . $image) }}" alt="">
@else
    <img class="ProfileImage" src="https://eu.ui-avatars.com/api/?name={{ $name }}&size=50" alt="">
@endif
