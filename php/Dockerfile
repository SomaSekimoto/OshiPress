FROM php:7.3-fpm-alpine

# modify font to pdf
# RUN apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ --allow-untrusted gnu-libiconv
# ENV LD_PRELOAD /usr/lib/preloadable_libiconv.so php
# modify font to pdf end

RUN docker-php-ext-install pdo_mysql
RUN chown -R www-data:www-data /var/www
