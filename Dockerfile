FROM ubuntu:20.04

RUN apt update && \
    apt install -y software-properties-common && \
    LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php && \
    apt update && \
    apt install -y php8.1 zip php8.1-mbstring php8.1-xml

RUN apt install -y curl iputils-ping procps vim tree

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer selfupdate && \
    composer require phpunit/phpunit --dev ^9

COPY ./composer.json /
RUN composer install