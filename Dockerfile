FROM php:8.1-apache

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        libicu-dev \
        libonig-dev \
        libzip-dev \
        libxml2-dev \
        git \
        && \
    docker-php-ext-install intl pdo_mysql zip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    a2enmod rewrite

RUN pecl channel-update pecl.php.net

WORKDIR /var/www/html
