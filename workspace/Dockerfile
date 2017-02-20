
FROM phusion/baseimage:latest
USER root


# Add the "PHP 7" ppa
RUN apt-get install -y software-properties-common && \
    add-apt-repository -y ppa:ondrej/php
RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg |  apt-key add - && \
echo "deb https://dl.yarnpkg.com/debian/ stable main" |  tee /etc/apt/sources.list.d/yarn.list
RUN  curl -sL https://deb.nodesource.com/setup_7.x | bash 
RUN apt-get update && \
    apt-get install -y  --allow-unauthenticated \
        php7.0-cli \
        php7.0-common \
        php7.0-curl \
        php7.0-json \
        php7.0-xml \
        php7.0-mbstring \
        php7.0-mcrypt \
        php7.0-mysql \
        php7.0-pgsql \
        php7.0-sqlite \
        php7.0-sqlite3 \
        php7.0-zip \
        php7.0-bcmath \
        php7.0-memcached \
        php7.0-gd \
        php7.0-dev \
        pkg-config \
        libcurl4-openssl-dev \
        libedit-dev \
        libssl-dev \
        libxml2-dev \
        xz-utils \
        libsqlite3-dev \
        sqlite3 \
        git \
        curl \
        vim \
        nano \
        postgresql-client \
        yarn \
        nodejs \
    && apt-get clean

# Install composer and add its bin to the PATH.
RUN curl -s http://getcomposer.org/installer | php && \
    echo "export PATH=${PATH}:/var/www/vendor/bin" >> ~/.bashrc && \
    mv composer.phar /usr/local/bin/composer


# Clean up APT when done.
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

WORKDIR /mnt/
