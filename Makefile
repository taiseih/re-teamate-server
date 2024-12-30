# Docker Composeコマンドを変数として定義
DC = docker-compose

# コンテナのビルド
build:
	$(DC) up -d build

# コンテナのビルドと起動
up:
	USER_NAME=$(shell id -nu) USER_ID=$(shell id -u) GROUP_NAME=$(shell id -ng) GROUP_ID=$(shell id -g) OS_NAME=$(OS_NAME) $(DC) up -d

# Laravelの依存関係のインストール
install:
	$(DC) exec app composer create-project --prefer-dist laravel/laravel=10.* .

# コンテナの停止と削除
down:
	$(DC) down

# キャッシュのクリア
cache-clear:
	$(DC) exec app php artisan cache:clear
	$(DC) exec app php artisan config:clear
	$(DC) exec app php artisan route:clear
	$(DC) exec app php artisan view:clear

# ログの表示
logs:
	$(DC) logs -f

# シェルの起動
shell:
	$(DC) exec app bash

# Dockerの起動状況
ps:
	$(DC) ps

# Laravelのセットアップコマンド
setup:
	docker-compose exec app sh -c "composer install && php artisan migrate"

artisan:
	$(DC) exec app php artisan $(filter-out $@,$(MAKECMDGOALS))

.PHONY: up down install key-generate migrate cache-clear logs shell ps setup artisan
