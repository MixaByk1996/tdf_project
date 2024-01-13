<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="/js/jquery.js"></script>
    <script src="/js/marquee.js"></script>
    <script type="text/javascript" src="/js/validate.js"></script>
    <script src="/js/main.js"></script>
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
