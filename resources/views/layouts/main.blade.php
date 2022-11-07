<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JKT48 | {{ $title }}</title>
    {{-- Font --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;600&family=Noto+Sans+JP:wght@700&family=Noto+Sans:ital,wght@0,700;0,800;0,900;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/style.css">
    @yield('styles')
</head>

<body>
    @include('partials.navbar')

    @yield('container')

</body>

</html>