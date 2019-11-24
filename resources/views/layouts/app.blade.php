<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Dino Sight') }}</title>

    </head>

    <body>

        <div id="app">

            {{-- Navbar --}}
            {{-- @include('inc.navbar') --}}

            <main class="container">

                @yield('content')
                
            </main>

        </div> 

    </body>

</html>