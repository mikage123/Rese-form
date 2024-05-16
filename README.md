アプリ名　飲食店予約サービス

作成した目的

ネットから簡単に予約できるようにするため

アプリケーションURL

機能一覧 ログイン機能 新規登録機能 ログアウト機能

使用技術 laravel 8.83.8

テーブル設計 

ER図 

環境構築 

docker-compose up -d --build

docker-compose exec php bash

composer install

.env.exampleファイルから/envを作成し、環境変数を変更

.envに以下の環境変数を追加

DB_CONNECTION=mysql

DB_HOST=mysql

DB_PORT=3306

DB_DATABASE=laravel_db

DB_USERNAME=laravel_user

DB_PASSWORD=laravel_pass

アプリケーションキーを作成

php artisan key:generate

開発環境:http://localhost/

phpmyadmin:http://localhost:8080/