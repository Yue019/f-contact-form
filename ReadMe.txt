お問い合わせフォーム


☆環境構築

①dockerビルド

１．git clone（coachtech教材より）
２．docker-compose up -d --build

②Laravel環境構築

１．docker-compose up -d --build
２．composer install
３．cp .env.exampleファイルから,envを作成し、環境変数を変更
４，php artisan key:generate
５．artisan make:migrate

☆使用技術

・PHP 8
・Laravel
・Mysql 8

☆URL
・開発環境  http://localhost
・phpMyAdmin http://localhost:8080







