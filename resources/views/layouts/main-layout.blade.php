<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-UaEi+kdJgKwLD6+mZSYFzR+KjZ+zGz25U6N7U6l2l6o3U6eKjxpWVGBaOQOQoLrkq3hX5KXOvfm5R5MVVr+Adw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
