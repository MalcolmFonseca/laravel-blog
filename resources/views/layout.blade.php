<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/paginator.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/post.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/project.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sessionform.css') }}" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Malcolm Fonseca</title>
</head>

<body>
    <div>
        <x-navbar></x-navbar>
        <div id="miniWebContainer">
            @yield('content')
        </div>
    </div>

    @if (session()->has('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show">
            <p>{{ session('success') }}</p>
        </div>
    @endif
</body>

</html>
