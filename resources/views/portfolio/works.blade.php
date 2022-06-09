<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Work画面</title>
    <meta name="description" content="ポートフォリオ。">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="/css/work.css" rel="stylesheet">
    <!-- レスポンシブ対応 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous" defer></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous" defer></script>
    <script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script>
    <script src="/js/like.js" defer></script>
</head>

<body>
    <header class="page-header">
        <div id="video-area">
            <video id="video" poster="icon/img/45961_Moment.jpg" webkit-playsinline playsinline muted autoplay loop>
                <source src="icon/img/45961.mp4" type="video/mp4">
            </video>
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
    <div class="home-content">
        <h2 class="page-name">Works</h2>
        <P><span>My client and private works</span></P>
    </div>
    <div class="sub-content">
        <p class="sub-title">Projects</p>
        <p class="sub-dot">・・・・・<span class="color">∇</span>・・・・・</p>
    </div>
    <div>
        <nav>
            <ul class="sub-nav">
                <li><a href="works#anchor">Back-end</a></li>
                <li><a href="Design#anchor">Design</a></li>
                <li><a href="Front#anchor">Front-end</a></li>
            </ul>
        </nav>
        <h2 class="sub-name" id="anchor">Back-end</h2>
    </div>
    <!-- ここからBack-endの詳細スタート 1段目 -->
    <div class="box-works">
        <ul class="works-list">
            <li class=works-Product>
                <img class=work-img src="icon/img/221610.png" alt="商品向上アンケート">
                <img class=work-img src="icon/img/214758.png" alt="login画面">
                <h3>商品向上アンケート</h3>
                <p>―――――――――――――――――</p>
                <P>商品向上用のアンケートです。コメントを投稿できます。<br>Lravel/MySOLを利用しています。</P>
                <span>HTML / CSS / PHP / MySQL /laravel</span>
                <div class="link">
                    <a href="https://jp-todo-laravel.herokuapp.com/sinup">投稿画面</a>
                    <a href="https://jp-todo-laravel.herokuapp.com/login">login画面</a>
                    <a href="https://github.com/gundaaaa/todo_laravel">GitHub</a>
                </div>
            </li>
            <li class=works-quiz>
                <img class=quiz src="icon/img/140505.png" alt="quiz問題画像">
                <img class=img-quzi src="icon/img/140545.png" alt="quiz問題画像">
                <h3>quiz問題</h3>
                <p>―――――――――――――――――</p>
                <p>
                    html・cssに関するquizです。<br>Lravel/MySQLを利用しています</p>
                <span> HTML / CSS / PHP / MySQL /laravel </span>
                <div class="link">
                    <a href="https://todo-quiz-game.herokuapp.com/torroko">Webサイト</a>
                    <a href="https://github.com/gundaaaa/quiz-game">GitHub</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- ここから2段目 -->
    <div class="box-works">
        <ul class="works-list">
            <li class=works-Product>
                <img class=work-img src="icon/img/coming.jpg" alt="Twitterクローン">
                <h3>Twitterのクローン</h3>
                <p>―――――――――――――――――</p>
                <P>Twitterのクローンになります。<br>Lravel/MySOLを利用しています。</P>
                <span>HTML / CSS / JavaScript / PHP / MySQL /laravel</span>
                <div class="link">
                    <a href="">HOME画面</a>
                    <a href="">login画面</a>
                    <a href="">GitHub</a>
                </div>
            </li>
            <li class=works-Products>
                <img class=works-img src="icon/img/coming.jpg" alt="勤怠管理システム">
                <h3>勤怠管理システム</h3>
                <p>―――――――――――――――――</p>
                <p>
                    勤怠管理システムになります。<br>Lravel/MySQLを利用しています</p>
                <span> HTML / CSS / PHP / MySQL /laravel </span>
                <div class="link">
                    <a href="">Webサイト</a>
                    <a href="">GitHub</a>
                </div>
            </li>
        </ul>
    </div>
    <footer>
        <p class="black-footer">© Yuu Fukusihma All rights reserved</p>
    </footer>
</body>

</html>