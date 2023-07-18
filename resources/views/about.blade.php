@extends('layouts.my_app')

@section('title')
    <title>{{config('app.name')}}</title>
@endsection

@section('content')
    <img src="./img/top-image.jpg" alt="top-image.jpg" class="about_img">

    <main id="about">
        <h2>アバウトページ</h2>
        <p>当サイトは、Laravelを勉強していく中で簡単なポートフォリオを作成したいと思い作成しました。</p>

        <article id="profile">
            <img src="/img/sheep.jpg" alt="sheep.jpg" class="about_img">

            <h2 class="name">＠watanabe</h2>
            <ul>
                <li>好き：コーヒー、お酒</li>
                <li>趣味：フットサル、音楽、読書、映画</li>
                <li>仕事：システムエンジニア</li>
            </ul>
        </article>
    </main>
    @endsection    