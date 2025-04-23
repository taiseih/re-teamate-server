ARTISAN=php artisan

# デフォルトコマンド
artisan:
	$(ARTISAN) $(filter-out $@,$(MAKECMDGOALS))

# データベースマイグレーションコマンド
migrate:
	docker-compose exec app sh -c "php artisan migrate"

# Laravelのセットアップコマンド
setup:
	docker-compose exec app sh -c "composer install && php artisan migrate"

#権限設定
chmd:
	docker-compose exec app sh -c "chmod -R 755 public ."

chown:
	docker-compose exec app sh -c "chown -R www-data:www-data ."

.PHONY: install setup migrate chmd chown artisan
