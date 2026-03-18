@extends('layout')

@section('content')
    <x-back-button />
    <form action="/profile/change-password/{{ $user->id }}" method="POST" id='Form' class="Container"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="Row">
            <x-form.input name="new password" type="password" />
            <x-form.input name="confirm password" type="password" />
        </div>

        <button type="submit" class="SubmitButton">Change Password</button>
    </form>
@endsection
