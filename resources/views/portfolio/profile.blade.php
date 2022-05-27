{{--@extends('layouts.app')
@section('title','プロフィール画面 / protfolio')
@section('header')--}}
<!-- <div id="video-area">
    <video id="video" poster="icon/img/45961_Moment.jpg" webkit-playsinline playsinline muted autoplay loop>
        <source src="icon/img/45961.mp4" type="video/mp4">
    </video>
</div>
<div>
    <img class="main-icon" src="icon/img/1920.png" alt="mainアイコン">
</div> -->
{{--@endsection--}}

<html lang="ja">

<head>
    @include('common.head')
    <meta charset="utf-8">
    <title>プロフィール画面 / protfolio</title>
    <meta name="description" content="ポートフォリオ。">
</head>

<body>
    <div id="splash">
        <div id="splash_text"></div>
        <div class="loader_cover loader_cover-up"></div>
        <div class="loader_cover loader_cover-down"></div>
        <!--/splash-->
    </div>
    <header>
        <div id="video-area">
            <video id="video" poster="icon/img/45961_Moment.jpg" webkit-playsinline playsinline muted autoplay loop>
                <source src="icon/img/45961.mp4" type="video/mp4">
            </video>
        </div>
    </header>
    <div class="home-content">
        <img class="main-icon" src="icon/img/1920.png" alt="mainアイコン">
        <h2 class="page-name">Yuu Fukushima</h2>
        <P><span>Wed Application Developer</span></P>
    </div>
    <nav>
        <ul class="main-nav">
            <li><a href="works">works</a></li>
            <li><a href="about">about</a></li>
            <li><a href="contact">contact</a></li>
        </ul>
    </nav>

</body>

</html>