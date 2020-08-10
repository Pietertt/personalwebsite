FROM php:7.4-fpm-alpine

WORKDIR /var/www

RUN apk update

# Laravel requirements
RUN apk add php7-xml
RUN apk add php7-tokenizer
RUN apk add php7-pdo 
RUN apk add php7-openssl
RUN apk add php7-mbstring
RUN apk add php7-json
RUN apk add php7-fileinfo
RUN apk add php7-ctype
RUN apk add php7-bcmath

# Additional OctoberCMS requirements
RUN apk add php7-curl
RUN apk add php7-zip
RUN apk add php7-gd

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-enable pdo_mysql

# Get composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www

RUN composer install

CMD ["php", "artisan", "serve", "--host=0.0.0.0"]