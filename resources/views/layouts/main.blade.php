<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('header-title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-full bg-gray-50 text-gray-800">

    @include('includes.header')

    <main class="grow w-full">
        @yield('content')
    </main>

    @include('includes.footer')

</body>
</html>
