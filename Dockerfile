FROM php:8.3
WORKDIR /var/www/project
RUN apt-get update && apt-get install -y git zip p7zip \
    && pecl install protobuf-3.25.3 \
    && docker-php-ext-enable protobuf \
    && echo "protobuf.keep_descriptor_pool_after_request = 1" >> /usr/local/etc/php/conf.d/docker-php-ext-protobuf.ini