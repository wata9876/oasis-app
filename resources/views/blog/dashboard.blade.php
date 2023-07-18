@extends('layouts.blog_app')

@section('title')
    <title>記事一覧 | {{config('app.name')}}</title>
@endsection

@section('header')
    <h1 class="title">記事一覧</h1>
@endsection

@section('content')
    @foreach ($articles as $article)
        <ul class="dateList">
            <li class="dateList__item">{{$article->created_at}}</li>
        </ul>
        <h2 class="heading heading-secondary">
            <a href="http://ordermadekazuguitarschool.com/polish/">{{$article->title}}</a>
        </h2>
        <p class="phrase phrase-secondary">
        {{$article->content}}    
        </p>
        <div class="btn btn-right">
            <a class="btn__link btn__link-normal" href="http://ordermadekazuguitarschool.com/polish/">続きを読む</a>
        </div>
    @endforeach       
@endsection