<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="route('logout')"
                                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <div class="text-sm text-gray-700 dark:text-gray-500 underline">{{__('Log Out')}}</div>
                    </a>
                </form>
            @endauth
        </div>
    @endif

    <div id="cassecouille" style="position: fixed; right:16px; bottom:14px;">
        <img src="https://cdn.discordapp.com/attachments/952999260884971631/960277874026373200/unknown.png" alt="connerie" />
    </div>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center sm:justify-start sm:pt-0 text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg"
                     width="303" height="166" viewBox="0 0 303.000000 166.000000"
                     preserveAspectRatio="xMidYMid meet">
                    <metadata>
                        Created by potrace 1.16, written by Peter Selinger 2001-2019
                    </metadata>
                    <g transform="translate(0.000000,166.000000) scale(0.100000,-0.100000)"
                       fill="#FFFFFFFF" stroke="none">
                        <path d="M1376 1158 c-3 -7 -25 -105 -50 -218 -45 -205 -45 -205 -25 -225 17
                            -17 33 -20 113 -20 79 0 97 3 115 19 14 13 19 26 15 38 -3 11 -27 108 -53 216
                            l-48 197 -31 3 c-20 2 -34 -2 -36 -10z"/>
                        <path d="M1615 928 c-16 -46 -93 -421 -89 -432 19 -50 217 -54 247 -4 8 12 0
                            63 -33 200 -64 269 -56 248 -91 248 -16 0 -32 -6 -34 -12z"/>
                        <path d="M1228 782 c-26 -8 -49 -21 -52 -29 -4 -8 37 -42 115 -94 l120 -80 65
                            41 c40 27 64 49 64 61 0 16 -2 17 -27 3 -36 -18 -153 -18 -198 0 -43 18 -57
                            44 -45 85 5 17 8 31 7 30 -1 0 -23 -8 -49 -17z"/>
                        <path d="M1448 543 c-21 -9 -38 -20 -38 -25 0 -9 192 -154 227 -170 19 -9 37
                            0 137 72 64 46 116 90 116 97 0 13 -26 27 -73 38 -20 5 -22 2 -22 -36 0 -37
                            -4 -43 -35 -60 -24 -13 -55 -19 -103 -19 -109 0 -161 32 -150 93 6 31 -3 33
                            -59 10z"/>
                    </g>
                </svg>
                <h3>Rejoins la communauté des plots !</h3>
                <x-btn :href="route('register')">
                    Je veux être un plot !
                </x-btn>
            </div>

            <div class="text-center sm:justify-start sm:pt-0 text-gray-200 mt-4">
                <a href="{{route('login')}}" class="inline-flex text-center
            px-4 py-2 bg-gray-800 border border-transparent rounded-md
            font-semibold text-xs font-bold uppercase tracking-widest
            hover:bg-amber-500 active:bg-gray-900 focus:outline-none
            focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25
            transition ease-in-out duration-150 text-amber-500 hover:text-gray-800">Je suis déjà un beau plot !!</a>
            </div>
    </div>
</div>
</body>
</html>
