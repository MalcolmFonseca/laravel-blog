@extends('layout')

@section('content')
    <main class="SmallContent">
        <div>
            <h1 class="PageTitle">Register</h1>
            <form method="POST" action="/register" id="Form" class="Container">
                @csrf
                <div class="Row">
                    <x-form.input name="name" />
                    <x-form.input name="username" />
                </div>

                <div class="Row">
                    <x-form.input name="email" type="email" />
                    <x-form.input name="password" type="password" />
                </div>
                <button type="submit" class="SubmitButton">Register</button>
            </form>
        </div>
    </main>
@endsection
