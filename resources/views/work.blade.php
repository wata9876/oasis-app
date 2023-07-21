@extends('layouts.my_app')

@section('title')
    <title>Works | {{config('app.name')}}</title>
@endsection

@section('content')
    <main id="works">
        <h2>ポートフォリオ</h2>
        <p>このページでは、私が作成した物を紹介します。</p>

        <article>
            <section>
                <h3>作成した物リスト</h3>
                <ul>
                    <li>
                        <a href="{{ route('article') }}" target="_blank" class="c-card">
                        　課題リスト
                        </a>
                    </li>
                    <li><p>PHP/Laravelの勉強に作成した昔ながらの掲示板サービスです。</p></li>
                </ul>
            </section>
        </article>
    </main>
@endsection