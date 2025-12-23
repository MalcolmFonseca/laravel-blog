@extends('layout')

@section('content')
    <main class="SmallContent">
        <div>
            <h1 class="PageTitle">Register</h1>
            <form method="POST" action="/register" id="SessionForm" class="Container">
                @csrf
                <div class="Row">
                    <div class="Column">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" required value="{{ old('name') }}">
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="Column">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required value="{{ old('username') }}">
                        @error('username')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="Row">
                    <div class="Column">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required value="{{ old('email') }}">
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="Column">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required value="{{ old('password') }}">
                        @error('password')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="SubmitButton">Register</button>
            </form>
        </div>
    </main>
@endsection
