<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="format-detection" content="telephone=no">

    
    <script src="/js/jquery.js"></script>
    <script src="/js/marquee.js"></script>
    <script type="text/javascript" src="/js/validate.js"></script>
    <script src="/js/main.js"></script>
{{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
    <script src="/js/filterFavorite.js"></script>
    <script src="/js/catalog.js"></script>
    <script src="/js/slider.js"></script>

    <script src="/js/filterCatalog.js"></script>
    <script src="/js/modalCart.js"></script>
    <script src="/js/modalCart2.js"></script>
    <script src="/js/modalCart3.js"></script>
    <script src="/js/modalCart4.js"></script>
    <script src="/js/modalCart5.js"></script>

    <script src="/js/cabinet.js"></script>
    <script src="/js/home.js"></script>
    <script src="/js/burgerMenu.js"></script>


    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="stylesheet" href="../../css/app.css">
    <title>@yield('title-block')</title>
</head>
<body>
<div class="adaptive">
    @include('inc.modals')
    @include('inc.header')
    @yield('content')
    {{--    @if(session('status'))--}}
    {{--        <div class="alert alert-success">--}}
    {{--            {{ session('status') }}--}}
    {{--        </div>--}}
    {{--    @endif--}}
    @include('inc.appeal')
    @include('inc.footer')
</div>

</body>
</html>
