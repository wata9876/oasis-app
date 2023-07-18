@extends('layouts.my_app')

@section('title')
    <title>Works | {{config('app.name')}}</title>
@endsection

@section('content')
    <main id="works">
        <h2>ワークスページ</h2>
        <p>このページでは、私がこれまでに作成してきたものを掲載しています。</p>

        <article>
            <section>
                <h3>BBS-App</h3>
                <ul>
                    <li>
                        <a href="https://bbs-app.dainaka.live" target="_blank" class="c-card">
                            <img src="/img/BBS-App.png" alt="BBS-App.png">
                            https://bbs-app.dainaka.live
                        </a>
                    </li>
                    <li><p>PHP/Laravelの勉強に作成した昔ながらの掲示板サービスです。</p></li>
                </ul>
            </section>
        </article>
    </main>
@endsection