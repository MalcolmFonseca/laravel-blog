<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/app.css" />
    <link rel="stylesheet" type="text/css" href="/navbar.css" />
    <link rel="stylesheet" type="text/css" href="/post.css" />

    <title>Malcolm Fonseca</title>
</head>

<body>
    <div id="root">
        <div>
            <x-navbar></x-navbar>
            <div id="miniWebContainer">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>