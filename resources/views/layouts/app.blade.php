<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('pagina-raccolte', 'Raccolte')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header>
            @include('partials/header')
        </header>
        <main>
            @yield('content')
        </main>
        <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
