FROM php:7.1.1-fpm


RUN apt-get update && apt-get install -y libz-dev libmemcached-dev git

RUN docker-php-ext-install pdo pdo_mysql  zip
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"


