<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FOUEJIO PORTFOLIO</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/basic.css') }}">
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lesFonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">

    @yield('section_for_other_css')
</head>

<body>

    @include('layouts._nav')


    @yield('content')


    @include('layouts._footer')

    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('materialize/js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
    @yield('section_for_other_js')
</body>

</html>