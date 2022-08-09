FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    libmemcached-dev \
    zlib1g-dev \
    && pecl install -of memcached && docker-php-ext-enable memcached

COPY php.ini /usr/local/etc/php/conf.d/php.ini
COPY zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf

WORKDIR /app