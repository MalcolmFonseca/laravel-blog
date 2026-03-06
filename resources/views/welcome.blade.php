@extends('layout')

@section('content')
    <div id="LandingPageContent">
        <div id="LandingPageHeader">
            <h1 id="LandingPageName">Malcolm Fonseca</h1>
            <h3 class="PageSubtitle">Software Engineer</h3>
            <h3 class="PageSubtitle">Malcolmfonseca@hotmail.com</h3>
            <h3 class="PageSubtitle">Strathroy, Ontario, Canada</h3>
            <x-socials />
        </div>
        <div id="About">
            <p id="Bio">
                Hi! I’m Malcolm Fonseca, a Software Engineering graduate from
                Western University with hands-on project experience across web, game,
                and medical software development.
            </p>
            @if (isset($post))
                <x-featured-post-card :post=$post />
            @endif
        </div>
    </div>
@endsection
