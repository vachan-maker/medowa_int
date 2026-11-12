<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-[#f5f5f7] text-gray-900 px-5 py-8 sm:px-8 lg:px-16">
    <x-header />

    <div class="my-8 lg:my-10">
        <x-categories :categories="$categories" />
    </div>

    <div class="my-8 lg:my-10">
        <x-latest :latest-products="$latestProducts" />
    </div>

    <div class="my-8 lg:my-10">
        <x-accessories :accessories="$accessories" />
    </div>

    <div class="my-8 lg:my-10">
        <x-sound :sounds="$sounds" />
    </div>

    <x-footer />
</body>
</html>
