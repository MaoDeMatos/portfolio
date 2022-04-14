# PHP image
FROM php:fpm-alpine as php_fpm

WORKDIR /app

COPY ./*.php      .
COPY ./config     ./config
COPY ./App        ./App

# NGINX image
FROM nginx:alpine AS nginx_server

RUN rm -f /etc/nginx/conf.d/default.conf
COPY docker/nginx/conf.d /etc/nginx/conf.d

WORKDIR /app

COPY ./*.php      .
COPY ./*.ico      .
COPY ./public     ./public
