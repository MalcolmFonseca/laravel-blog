@extends('layout')

@section('content')
    <main>
        <h1>Log In</h1>
        <form method="POST" action="/login" id="RegisterForm">
            @csrf
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

            <button type="submit">Log In</button>
        </form>
    </main>
@endsection
