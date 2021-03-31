<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Satellite Med | Urgent Care | Family Practice') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"
                referrerpolicy="origin">
        </script>
       <style>

       .heart-rate {
        text-align: left;
        max-width: 400px;
        height: 80px;
        position: relative;
        margin:0px auto;
        balrgtop:160px;
        overflow:hidden;

        }

        .fade-in {
        position: absolute;
        width: 100%;
        height:100%;
        background-color: white;
        top: 0;
        right: 0;
        animation: heartRateIn 4.5s linear infinite;

        /* Gia na katalavw ti ginetai des auto
        border:1px solid red;
        */

        }

        .fade-out {

        position: absolute;
        width: 120%;
        height: 100%;
        top: 0;
        left: -120%;
        animation: heartRateOut 4.5s linear infinite;
        background: rgba(255, 255, 255, 1);
        background: -moz-linear-gradient(left, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 50%, rgba(255, 255, 255, 0) 100%);
        background: -webkit-linear-gradient(left, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 50%, rgba(255, 255, 255, 0) 100%);
        background: -o-linear-gradient(left, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 50%, rgba(255, 255, 255, 0) 100%);
        background: -ms-linear-gradient(left, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 50%, rgba(255, 255, 255, 0) 100%);
        background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 80%, rgba(255, 255, 255, 0) 100%);
        }

        @keyframes heartRateIn {
        0% {
        width: 100%;
        }
        50% {
        width: 0%;
        }
        100% {
        width: 0;
        }
        }

        @keyframes heartRateOut {
        0% {
        left: -120%;
        }
        30% {
        left: -120%;
        }
        100% {
        left: 0;
        }
        }
    </style>
    </head>
    <body class="font-sans antialiased">
    <x-header></x-header>

       @yield('content')


    <x-footer></x-footer>
        @livewireScripts

    </body>
</html>
