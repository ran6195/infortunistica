<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#3c3c3a]">

    <div class="mx-auto bg-[#343a40] h-auto">
        <div id="logo" class="pt-3"><img src="{{ url('/img/logo_iv.png') }}"
                alt="logo INFORTUNISTICA VENETA BOLOGNA"></div>
    </div>
    <div>
        <img src="{{ url('/img/slide_desktop_1400x500.jpg') }}" alt="" class="hidden lg:block mx-auto">
        <img src="{{ url('/img/slide_mobile_800x800.jpg') }}" alt="" class="block lg:hidden mx-auto">
        <div class="bg-white">

        </div>
    </div>

    </div>



</body>

</html>
