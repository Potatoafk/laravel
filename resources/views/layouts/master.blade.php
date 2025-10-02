<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- tilwind --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="dark:bg-gray-700">
    {{-- @include('partials.navbar') --}}
    <div>
        <div>
            @yield('content')


        </div>
        {{-- @include('partials.footer') --}}
    </div>
</body>
</html>
