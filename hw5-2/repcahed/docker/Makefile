init: docker-down-clear docker-pull docker-build docker-up

docker-pull:
	docker-compose pull

docker-build:
	docker-compose build

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

docker-down-clear:
	docker-compose down -v  --remove-orphans

composer:
	docker-compose run --rm php-cli composer install