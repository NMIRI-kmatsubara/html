FROM php:7-fpm

#COPY ./code /var/www/html
RUN apt-get -y update && \
    apt-get -y upgrade && \
    apt-get install -y locales locales-all && \
    export LANG=en_US.UTF-8
