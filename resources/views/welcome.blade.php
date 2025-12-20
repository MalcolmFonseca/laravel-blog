@extends('layout')

@section('content')
    <div id="LandingPageContent">
        <div>
            <h1 id="LandingPageName">Malcolm Fonseca</h1>
            <h3 class="PageSubtitle">Software Engineer</h3>
            <h3 class="PageSubtitle">Strathroy, Ontario, Canada</h3>
            <div id="Socials">
                <a href="https://www.linkedin.com/in/malcolmfonseca" target="_blank">
                    <img width="30px" src="/Images/LinkedIn.png"></img>
                </a>
                <a href="https://github.com/MalcolmFonseca" target="_blank">
                    <img width="30px" src="/Images/Github.svg"></img>
                </a>
            </div>
        </div>
        <div id="About">
            <p id="Bio">
                Hi! I’m Malcolm Fonseca, a Software Engineering graduate from
                Western University with hands-on project experience across web, game,
                and medical software development.
            </p>
            <div id="Technologies">
                <h2 id="TechHeader">Preferred Tech:</h2>
                <div id="TechnologiesLists">
                    <div>
                        <ul>
                            <li id="TechListTitle">Languages</li>
                            <li>Javascript</li>
                            <li>Typescript</li>
                            <li>PHP</li>
                            <li>C#</li>
                            <li>Python</li>
                            <li>C++</li>
                            <li>Java</li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li id="TechListTitle">Web Dev</li>
                            <li>React JS</li>
                            <li>Laravel</li>
                            <li>HTML + CSS</li>
                            <li>Node JS</li>
                            <li>Vite</li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li id="TechListTitle">Database</li>
                            <li>SQL</li>
                            <li>MongoDB</li>
                            <li>MariaDB</li>
                            <li>SQLite</li>
                            <li>Firebase</li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li id="TechListTitle">Other Tech</li>
                            <li>Linux (Arch btw)</li>
                            <li>AWS</li>
                            <li>GCP</li>
                            <li>Godot</li>
                            <li>Unity</li>
                            <li>Hololens AR</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
