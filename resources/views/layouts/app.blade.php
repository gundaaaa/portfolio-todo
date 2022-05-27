<!DOCTYPE html>
<html lang="ja">

<head>
    @include('common.head')
    <title>@yield('title')</title>
    <meta name="description" content="ポートフォリオです。">
</head>

<body class="home">
    <header id="header">
        @yield('header')
    </header>
    <div class="main">
        @yield('main')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
</body>

</html>