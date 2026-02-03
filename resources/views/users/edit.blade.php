@extends('layout')

@section('content')
    <x-back-button />
    <form action="/profile/edit/{{ $user->id }}" method="POST" id='Form' class="Container"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="Row">
            <x-form.input name='profile_image' type='file' required='false' />
            <x-form.input name='name' :value="old('name', $user->name)" />
        </div>

        <div class="Row">
            <x-form.input name='username' :value="old('username', $user->username)" />
            <x-form.input name='email' :value="old('email', $user->email)" />
        </div>

        <div class="Row">
        </div>
        <button type="submit" class="SubmitButton">Update</button>
    </form>
@endsection
