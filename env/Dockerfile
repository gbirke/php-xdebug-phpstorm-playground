FROM php:7.2-fpm as base

FROM base as app_debug

RUN pecl install xdebug-2.6.0 \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_log=/tmp/xdebug_remote.log" >> /usr/local/etc/php/conf.d/xdebug.ini