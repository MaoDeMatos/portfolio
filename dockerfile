# Base image to use
FROM nginx:alpine as base

# RUN rm -f /etc/nginx/conf.d/default.conf
# RUN apk update && apk upgrade
# COPY docker-conf/httpd.conf /usr/local/apache2/conf

# Dev image
# FROM base AS dev

# COPY docker-conf/httpd.conf /usr/local/apache2/conf
# WORKDIR /app
COPY . /app

# CMD  [ "httpd", "-D", "FOREGROUND"]