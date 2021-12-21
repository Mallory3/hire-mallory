<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Hire Mallory</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Rambla:wght@700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="/dist/output.css" rel="stylesheet">

    </head>
    <body class="antialiased text-gray-800 max-w-full">
        
        <div id="app">
                
                <x-nav></x-nav>

                <main>

                    <div>

                        <!-- Yield the content of each resources/js/components-->
                        <router-view></router-view>
                    </div>
                </main>

                <x-contact></x-contact>
        
            </div>

        <script src="/js/app.js"></script>

    </body>
</html>
