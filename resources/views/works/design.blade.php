<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>design画面</title>
    <meta name="description" content="ポートフォリオ。">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="/css/design.css" rel="stylesheet">
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
    <div class="sub-image">
        <nav>
            <ul class="sub-nav">
                <li id="anchor"><a href="works#anchor">Back-end</a></li>
                <li><a href="Design#anchor">Design</a></li>
                <li><a href="Front#anchor">Front-end</a></li>
            </ul>
        </nav>
        <h2 class="sub-name" id="anchor">Design</h2>
    </div>
    <!-- ここからdesignの詳細スタート 1段目 -->
    <div class="box-works">
        <ul class="works-list">
            <li class=works-Product>
                <img class=work-img src="icon/img/cd2235png.png" alt="cdジャケット">
                <h3>cdジャケットをイメージ</h3>
                <p>―――――――――――――――――</p>
                <P>Psを使って作成しています。</P>
                <span>Adobe Photoshop</span>
            </li>
            <li class=works-quiz>
                <img class=quiz src="icon/img/44354.png" alt="空き缶デザイン">
                <h3>空き缶をデザイン・エナジー系ドリンク</h3>
                <p>―――――――――――――――――</p>
                <p>Psを使って作成しています。</p>
                <span>Adobe Photoshop</span>
            </li>
        </ul>
    </div>
    <!-- ここからdesignの詳細スタート 2段目 -->
    <div class="box-works">
        <ul class="works-list">
            <li class=works-Product>
                <img class=work-img src="icon/img/89898.png" alt="風景">
                <h3>中国の街並</h3>
                <p>―――――――――――――――――</p>
                <P>Psを使って作成しています。</P>
                <span>Adobe Photoshop</span>
            </li>
            <li class=works-quiz>
                <img class=quiz src="icon/img/1445.png" alt="フィルム作成">
                <h3>チェーンフィルム</h3>
                <p>―――――――――――――――――</p>
                <p>Psを使って作成しています。</p>
                <span>Adobe Photoshop</span>
            </li>
        </ul>
    </div>
    <footer>
        <p class="black-footer">© Yuu Fukusihma All rights reserved</p>
    </footer>
</body>

</html>