<nav id="nav">
    <a href="/">
        <img src=/Images/Logo.png id="navlogo" alt=""></img>
        <h1 id="Name">Malcolm Fonseca</h1>
    </a>
    <ul id="navlinks">
        <x-nav.navitem name="projects" />
        <x-nav.navitem name="blog" />
        @auth
            <x-nav.navitem name="profile" link_args="/{{ request()->user()->id }}" />
            <x-nav.navitem name="logout" form="true" />
        @else
            <x-nav.navitem name="register" />
            <x-nav.navitem name="login" />
        @endauth
    </ul>
</nav>
