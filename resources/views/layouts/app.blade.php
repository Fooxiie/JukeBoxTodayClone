<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-900">
            <div class="flex align-middle">
                <x-application-logo style="margin-right: 0"></x-application-logo>
                <h1 class="text-gray-200 font-bold align-middle" style="font-family: 'Fredoka One', cursive;font-size: 64px; margin-top:auto;margin-bottom:auto;margin-left:-50px">{{env('app_name')}}</h1>
                <form method="POST" action="{{ route('logout') }}" style="position: fixed; right:10px; top:10px;">
                    @csrf

                    <a href="route('logout')"
                       onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <div class="text-sm text-gray-700 dark:text-gray-500 underline">{{__('Log Out')}}</div>
                    </a>
                </form>
            </div>

            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
