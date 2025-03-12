<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('css/basic.css') }}">
    <title>@yield('pageName')</title>
</head>
<body class="relative min-h-screen ">

    <x-navbar>
    </x-navbar>

    <div class="md:mx-[15%] mx-[5%] ">
        @yield('body')
    </div>

    <x-footer>
    </x-footer>

</body>
</html>
