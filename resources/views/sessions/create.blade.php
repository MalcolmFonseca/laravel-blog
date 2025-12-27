@extends('layout')

@section('content')
    <main class="SmallContent">
        <div>
            <h1 class="PageTitle">Log In</h1>
            <form method="POST" action="/login" id="Form" class="Container">
                @csrf
                <div class="Row">
                    <x-form.input name="email" type="email" />

                    <x-form.input name="password" type="password" />
                </div>
                <button type="submit" class="SubmitButton">Log In</button>
            </form>
        </div>
    </main>
@endsection
