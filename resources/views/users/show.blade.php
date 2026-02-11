@extends('layout')

@section('content')
    <main class="SmallContent">
        <div class="Container" x-data="{ show: false }">
            <h2>Profile Image</h2>
            <x-profile-image image="{{ $user->profile_image }}" name="{{ $user->name }}" />
            <h2>Name</h2>
            <p>{{ $user->name }}</p>
            <h2>User Name</h2>
            <p>{{ $user->username }}</p>
            <h2>Email</h2>
            <p>{{ $user->email }}</p>
            <div class="AdminTools">
                <a href="/profile/edit/{{ $user->id }}" class="Button">Edit Info</a>
                <a class="Button">Change Password</a>
                <button @click="show = true" class="Button" type="button">Delete Account</button>
            </div>
            <div x-show="show" @click.away="show = false" class="ConfirmMessage Container">
                <p>Are you Sure?</p>
                <form action="/profile/{{ $user->id }}" method="POST" class="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="Button">Confirm Delete Account</button>
                </form>
            </div>
        </div>
    </main>
@endsection
