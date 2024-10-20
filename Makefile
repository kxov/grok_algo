up:
	docker-compose up -d

down:
	docker-compose down --remove-orphans

composer-install:
	docker-compose run --rm php-cli composer install

test:
	docker-compose run --rm php-cli php vendor/bin/phpunit

run:
	docker-compose php bin/console ufo:sdk:generate