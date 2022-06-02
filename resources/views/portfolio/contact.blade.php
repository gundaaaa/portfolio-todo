<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>contact画面</title>
    <meta name="description" content="ポートフォリオ。">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="/css/contact.css" rel="stylesheet">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous" defer></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous" defer></script>
    <script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script>
    <script src="/js/4-1-4.js" defer></script>
</head>

<body>
    <header class="page-header">
        <div id="splash">
            <div id="splash_text"></div>
            <div id="video-area">
                <video id="video" class="fadUp" poster="icon/img/World1992.jpg" webkit-playsinline playsinline muted autoplay loop>
                    <source src="icon/img/World1992.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <img class="main-icon" src="icon/img/1920.png" alt="mainアイコン">
        <h1 class="main-name"><a class="main-profile" href="profile">yuu <br>fukushima</a></h1>
        <nav>
            <ul class="main-nav">
                <li><a href="works">works</a></li>
                <li><a href="about">about</a></li>
                <li><a href="contact">contact</a></li>
            </ul>
        </nav>
    </header>
    <div>
        <p class="main-title">contact</p>
    </div>
    <form action="contact" method="post">
        @csrf
        <div>
            <label for="company">貴社名</label>
            <input type="text" name="my_company">
        </div>
        <div>
            @error('name')
            <tr>
                <th>ERROR</th>
                <td>{{$message}}</td>
            </tr>
            @enderror
            <label for="name">お名前　<span>必須</span></label>
            <input type="text" name="name">
        </div>
        <div>
            @error('email')
            <tr>
                <th>ERROR</th>
                <td>{{$message}}</td>
            </tr>
            @enderror
            <label for="email">メールアドレス　<span>必須</span></label>
            <input type="email" name="email">
        </div>
        <div>
            @error('tel')
            <tr>
                <th>ERROR</th>
                <td>{{$message}}</td>
            </tr>
            @enderror
            <label for="tel">電話番号　<span>必須</span></label>
            <input type="tel" name="tel">
        </div>
        <div>
            @error('Requirements')
            <tr>
                <th>ERROR</th>
                <td>{{$message}}</td>
            </tr>
            @enderror
            <label for="message">お問い合わせ内容　<span>必須</span></label>
            <textarea name="message"></textarea>
        </div>
        <input type="submit" id="myfunc" class="button" value="送信">
        <script>
            'use strict';
            const myfunc = document.getElementById("myfunc");
            myfunc.addEventListener("click", function() {
                alert('この内容で本当によろしいでしょうか？');
            });
        </script>
    </form>
</body>