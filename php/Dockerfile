FROM php:7.1.1-fpm
RUN apt-get update && apt-get install -y libz-dev libmemcached-dev
RUN docker-php-ext-install pdo pdo_mysql  zip

# Clean up APT when done.
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*


