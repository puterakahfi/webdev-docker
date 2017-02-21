
FROM phusion/baseimage:latest
USER root


# Add the "PHP 7" ppa
RUN apt-get install -y software-properties-common && \
    add-apt-repository -y ppa:ondrej/php
RUN  curl -sL https://deb.nodesource.com/setup_7.x | bash
RUN apt-get update && apt-get install -y \
    apt-utils
RUN apt-get install -y  --allow-unauthenticated \
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
        nodejs \
    && apt-get clean

#YARN 
ARG INSTALL_YARN=false
ENV INSTALL_YARN ${INSTALL_YARN}
ARG YARN_VERSION=latest
ENV YARN_VERSION ${YARN_VERSION}
RUN if [ ${INSTALL_YARN} = true ]; then \
    curl -o- -L https://yarnpkg.com/install.sh | bash; \ 
    echo 'export PATH="$HOME/.yarn/bin:$PATH"' >> ~/.bashrc \
;fi



# ZSH AND OH MY ZSH

ARG INSTALL_ZSH=false
RUN if [ ${INSTALL_ZSH} =  true ]; then \
    apt-get install -y zsh && \
    sh -c "$(curl -fsSL https://raw.githubusercontent.com/robbyrussell/oh-my-zsh/master/tools/install.sh)" \
;fi




ARG INSTALL_COMPOSER=false
# Install composer and add its bin to the PATH.
RUN if [ ${INSTALL_COMPOSER} = true ]; then\
    curl -s http://getcomposer.org/installer | php && \
    echo "export PATH=${PATH}:/var/www/vendor/bin" >> ~/.bashrc && \
    mv composer.phar /usr/local/bin/composer \
;fi



# Clean up APT when done.
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

WORKDIR /var/www/
