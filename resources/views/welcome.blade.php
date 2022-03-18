<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="{{ mix('js/app.js') }}"></script>
    <script src="https://unpkg.com/vue@3"></script>
<script src="https://unpkg.com/vue-router@4"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;800&display=swap');
        body {
            font-family: 'Rubik', sans-serif;
        }

    </style>
</head>
<body class="antialiased bg-cover bg-fixed" style="background-image: url({{ asset('images/bg.jpg') }}) ;">
    <div id="app" 
    class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif
    <div class="h-auto w-full absolute top-0 z-20 flex flex-row justify-between text-lg px-10 items-center py-4">
        <div class="flex font-semibold items-center text-white">
            <img src="{{ asset('images/logo.svg') }}">
            <label>PUSAT KEMASAN</label>
        </div>
        <div class="flex flex-row font-semibold items-center space-x-10">
            <label>Dashboard</label>
            <label>Product</label>
            <label>Contact</label>
            <label class="bg-yellow-400">About Us</label>            
        </div>
    </div>
    <div class="w-full grid grid-cols-3 h-full relative gap-4">
        <left-component></left-component>         
        <mid-component></mid-component>         
        <right-component></right-component>        
        <div class="bg-yellow-400 w-6/12 absolute inset-y-0 -z-10 right-0 shadow-inner h-full"></div>   
    </div>
</div>


</script>
</body>

</html>
