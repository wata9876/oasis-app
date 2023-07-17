<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&display=swap" rel="stylesheet">
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<body class="container">
    <header id="header">
        <h1>{{config('app.name')}}</h1>
        <ul id="global-menu">
            <li><a href="#">about</a></li>
            <li><a href="#">works</a></li>
            <li><a href="#">contact</a></li>
        </ul>
    </header>

    <img src="./img/top-image.jpg" alt="top-image.jpg" class="about_img">

    <main id="about">
        <h2>アバウトページ</h2>
        <p>当サイトは、Laravelを勉強していく中で簡単なポートフォリオを作成したいと思い作成しました。</p>

        <article id="profile">
            <img src="/img/profile.svg" alt="profile.svg" >

            <h2 class="name">＠watanabe</h2>
            <ul>
                <li>好き：コーヒー、お酒</li>
                <li>趣味：フットサル、音楽、読書、映画</li>
                <li>仕事：システムエンジニア</li>
            </ul>
        </article>
    </main>

    <footer id="footer">
        <small>&copy; 2023 k.watanabe</small>
    </footer>
</body>
</html>