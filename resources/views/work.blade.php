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
                <h3>Grim Soul／グリムソウル | 攻略プレイ日記</h3>
                <ul>
                    <li>
                        <a href="https://grimsoul-clear.com" target="_blank" class="c-card">
                            <img src="/img/GrimSoul.png" alt="GrimSoul.png">
                            https://grimsoul-clear.com
                        </a>
                    </li>
                    <li><p>私がはまっていて、ずっとプレイしているスマホゲームです。<br>界隈では、めちゃくちゃマゾいと有名なサバイバルゲームです。</p></li>
                </ul>
            </section>

            <section>
                <h3>DailyReport</h3>
                <ul>
                    <li>
                        <a href="https://daily-report.dainaka.live" target="_blank" class="c-card">
                            <img src="/img/DailyReport.png" alt="DailyReport.png">
                            https://daily-report.dainaka.live
                        </a>
                    </li>
                    <li><p>日々の作業内容や振り返り、体温を記録する事ができるサービスです。</p></li>
                </ul>
            </section>

            <section>
                <h3>Chat-App</h3>
                <ul>
                    <li>
                        <a href="https://chat-app.dainaka.live" target="_blank" class="c-card">
                            <img src="/img/ChatApp.png" alt="ChatApp.png">
                            https://chat-app.dainaka.live
                        </a>
                    </li>
                    <li><p>PHP/Laravelの勉強に作成したチャットサービスです。</p></li>
                </ul>
            </section>

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