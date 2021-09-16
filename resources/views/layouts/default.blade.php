<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Css -->
    @yield('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    
    @yield('title')

</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <nav>
        <ul>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('admin-panel') }}">Admin-Panel</a>
            <a href="{{ route('programs.index') }}">Programs</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
        </ul>
    </nav>
    <div>
        @yield('content')
    </div>
</body>

</html>
