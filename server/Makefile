# Laravelをインストールするコマンド
install:
	docker-compose exec app sh -c "cd /app/server && composer install"

# データベースマイグレーションコマンド
migrate:
	docker-compose exec app sh -c "cd /app/server && php artisan migrate"

# Laravelのセットアップコマンド
setup:
	docker-compose exec app sh -c "cd /app/server && composer install && php artisan migrate"

#権限設定
chmd:
	docker-compose exec app sh -c "chmod -R 755 public ."

chown:
	docker-compose exec app sh -c "chown -R www-data:www-data ."

.PHONY: install setup migrate
