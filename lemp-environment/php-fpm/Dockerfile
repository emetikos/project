FROM phpdockerio/php74-fpm:latest
WORKDIR "/var/www"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

######## ORIGINAL START ##############
# Install selected extensions and other stuff
#RUN apt-get update \
#    && apt-get -y --no-install-recommends install  php-memcached php7.4-mysql php-redis php7.4-sqlite3 php-xdebug php7.4-gd php7.4-imap php-mongodb php7.4-odbc php7.4-soap php-ssh2 php7.4-xmlrpc php-yaml \
#    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
######## ORIGINAL END #############

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php-memcached php7.4-mysql php-redis php7.4-sqlite3 php-xdebug php7.4-gd php7.4-imap php-mongodb php7.4-odbc php7.4-soap php-ssh2 php7.4-xmlrpc php-yaml \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install git
RUN apt-get update \
    && apt-get -y install git \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install libXrender and libfontconfig and libssl and Imagick
RUN apt-get update \
# NEED TO SET wkhtmltopdf to specific version, download and install
#https://computingforgeeks.com/install-wkhtmltopdf-on-ubuntu-debian-linux/
#apt install fontconfig
#    && apt-get -y install libfontconfig1 libxrender1 libssl1.0-dev php7.4-imagick \
    && apt-get -y install libfontconfig1 libxrender1 libssl-dev php7.4-imagick \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install wget
RUN apt-get update \
    && apt-get -y install wget \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install symfony installer
RUN  wget https://get.symfony.com/cli/installer -O - | bash

ENV PATH="/root/.symfony/bin:${PATH}"
RUN export PATH
