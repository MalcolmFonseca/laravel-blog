@extends('layout')

@section('content')
    <main class="SmallContent">
        <div class="Container">
            <h2>Name</h2>
            <p>{{ $user->name }}</p>
            <h2>User Name</h2>
            <p>{{ $user->username }}</p>
            <h2>Email</h2>
            <p>{{ $user->email }}</p>
            <button type="button">Change Password</button>
            <button type="button">Delete Account</button>
        </div>
    </main>
@endsection
