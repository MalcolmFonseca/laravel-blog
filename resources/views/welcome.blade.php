@extends('layout')

@section('content')

<div id="LandingPageContent">
    <div>
        <h1 id="LandingPageName">Malcolm Fonseca</h1>
        <h3 id="Location">Software Engineer</h3>
        <h3 id="Location">Strathroy, Ontario, Canada</h3>
        <div id="Socials">
            <a href="https://www.linkedin.com/in/malcolmfonseca" target="_blank">
                <img width="30px"></img>
            </a>
            <a href="https://github.com/MalcolmFonseca" target="_blank">
                <img width="30px"></img>
            </a>
        </div>
    </div>
    <div id="About">
        <p id="Bio">
            Hi! I’m Malcolm Fonseca, a recent Software Engineering graduate from
            Western University with hands-on project experience across web, game,
            and medical software development.
        </p>
        <div id="Technologies">
            <h2 id="TechHeader">Preferred Tech:</h2>
            <div id="TechnologiesLists">
                <div>
                    <ul>
                        <li id="TechListTitle">Web Dev</li>
                        <li>Typescript</li>
                        <li>ReactJS</li>
                        <li>NodeJS</li>
                        <li>ExpressJS</li>
                        <li>SQLite</li>
                        <li>Vercel</li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li id="TechListTitle">Game Dev</li>
                        <li>C#</li>
                        <li>Unity</li>
                        <li>Aseprite</li>
                        <li>FL Studio</li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li id="TechListTitle">Other Tech</li>
                        <li>Linux</li>
                        <li>C++</li>
                        <li>Java</li>
                        <li>Python</li>
                        <li>Git</li>
                        <li>Hololens AR</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection