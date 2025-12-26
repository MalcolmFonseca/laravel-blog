@extends('layout')

@section('content')
    <main class="SmallContent">
        <div>
            <h1 class="PageTitle">Log In</h1>
            <form method="POST" action="/login" id="Form" class="Container">
                @csrf
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
                <button type="submit" class="SubmitButton">Log In</button>
            </form>
        </div>
    </main>
@endsection
