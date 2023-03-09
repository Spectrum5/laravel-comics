<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics | @yield('page-title')</title>

    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <header>
            @include('partials.header')
        </header>

        <main>
            @yield('main-content')
        </main>

        <footer>
            @include('partials.footer')
        </footer>
    </div>
</body>

</html>
