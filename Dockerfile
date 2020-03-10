FROM php:7.1-fpm

RUN apt-get update
RUN apt-get install libcurl4-gnutls-dev -y

RUN docker-php-ext-install pdo_mysql curl

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

COPY conf/php.ini /etc/php/7.1/fpm/conf.d/40-custom.ini
