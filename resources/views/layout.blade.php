<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/app.css" />
    <link rel="stylesheet" type="text/css" href="/navbar.css" />
    <link rel="stylesheet" type="text/css" href="/post.css" />
    <link rel="stylesheet" type="text/css" href="/paginator.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
