<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Dino Sight') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body>

        <div id="app">

            {{-- Navbar --}}
            @include('inc.navbar')

            <main class="container">

                {{-- Error Messages --}}
                @include('inc.messages')

                @yield('content')
                
            </main>

        </div> 

    </body>

</html>