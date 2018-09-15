<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>My Page - @yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/profile/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/profile/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/mdb.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/search/style.css') }}" />
</head>
<body>
    <!-- Content -->
    @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.poptrox.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('js/skel.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/profile.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
</body>
</html>