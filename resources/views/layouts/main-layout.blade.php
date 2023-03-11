<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>Laravel Comics | @yield('page-title', 'Home')</title>

    @vite('resources/js/app.js')
</head>

<body>
    <header>
        @include('partials.header') 
        @yield("header-content")
    </header>

    <main>
        @yield('main-content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
</body>

</html>
