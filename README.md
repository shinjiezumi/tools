<p align="center">
	<img src="https://tools.shinjiezumi.work/img/main.svg" width="100%" height="100px" alt="image">
</p>

# URL

https://tools.shinjiezumi.work

# このWebアプリについて

Web開発や生活の中で用途がありそうなツールをWebサービス化しています。

## ツール一覧

- ダミーデータジェネレーター
- 資産運用シミュレーター

## ダミーデータジェネレーター

名前や住所などの様々なテストデータ、ダミーデータを作成するツールです。

## 資産運用シミュレーター

毎年の投資額と利回りを元に20年運用した場合の資産額を計算するツールです。

# 使用技術

## フロントエンド

- Vue.js
- Materialize CSS FW

## バックエンド

- PHP 8.2
- Laravel 8
- MySQL 8.0

## ミドルウェア

- Nginx
- PHP-FPM

## CI/CD

- GitHub Actions
- Deployer

## 開発環境

docker(docker-compose)

## 本番環境
~~Webarena VPSクラウド~~

なし

# 環境構築

1. クローン

    ```
    git clone https://github.com/shinjiezumi/tools.git
    ```

2. イメージビルド、コンテナ起動

    ```
    docker-compose up -d
    ```

3. 初期化

    ```
    docker-compose exec app bash
    bash script/init.sh
    ```
