<nav id="nav">
    <a href="/">
        <img src=/Images/Logo.png id="navlogo" alt=""></img>
        <h1 id="Name">Malcolm Fonseca</h1>
    </a>
    <ul id="navlinks">
        <li>
            <a href="/projects">Projects</a>
        </li>
        <li>
            <a href="/blog">Blog</a>
        </li>
        <li>
            <a href="/contact">Contact</a>
        </li>
        @auth
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
            </li>
        @else
            <li>
                <a href="/register">Sign Up</a>
            </li>
            <li>
                <a href="/login">Log In</a>
            </li>
        @endauth
    </ul>
</nav>
