Laravel sail を使って Laravel9 の環境構築を行う

プロジェクト作成
$ curl -s https://laravel.build/oasis-app | bash

sailを起動し、ビルドする
cd oasis-app && ./vendor/bin/sail up

下記のコマンドを打つことで、sail upのコマンドでビルドが行えるようになる
$ alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'

コンテナに入りたい場合
sail shell

マイグレーションを実行したい場合
sail artisan migrate

laravel breezeをインストールしたい場合
composer require laravel/breeze --dev

php artisan breeze:install

node jsを使いたい場合
npm install

npm run dev