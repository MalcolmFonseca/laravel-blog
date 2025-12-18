@extends('layout')

@section('content')
    <main>
        <h1>Register</h1>
        <form method="POST" action="/register" id="RegisterForm">
            @csrf

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required value="{{ old('name') }}">
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required value="{{ old('username') }}">
                @error('username')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required value="{{ old('email') }}">
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required value="{{ old('password') }}">
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Register</button>
        </form>
    </main>
@endsection
