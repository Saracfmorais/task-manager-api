FROM php:8.1-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY ./src/ /var/www/html/

EXPOSE 3000

CMD ["php", "-S", "0.0.0.0:3000", "-t", "/var/www/html/"]