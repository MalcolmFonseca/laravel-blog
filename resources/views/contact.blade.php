@extends('layout')

@section('content')
    <main class="SmallContent">
        <div>
            <h1 class="PageTitle">Contact Me</h1>
            <form method="POST" action="/contact" id="Form" class="Container">
                @csrf
                <div class="Row">
                    <x-form.input name="name" />
                    <x-form.input name="email" type="email" />
                </div>
                <div class="FormTextArea">
                    <x-form.textarea name='message' rows="3" />
                </div>
                <button type="submit" class="SubmitButton">Send Message</button>
            </form>
        </div>
    </main>
@endsection
