@extends('layout')

@section('content')
    <main class="SmallContent">
        <div class="Container">
            <h2>Profile Image</h2>
            <x-profile-image image="{{ $user->profile_image }}" name="{{ $user->name }}" />
            <h2>Name</h2>
            <p>{{ $user->name }}</p>
            <h2>User Name</h2>
            <p>{{ $user->username }}</p>
            <h2>Email</h2>
            <p>{{ $user->email }}</p>
            <div class="AdminTools">
                <a href="/profile/edit/{{ $user->id }}" class="DarkContainer" type="button">Edit Info</a>
                <a class="DarkContainer" type="button">Change Password</a>
                <a class="DarkContainer" type="button">Delete Account</a>
            </div>
        </div>
    </main>
@endsection
