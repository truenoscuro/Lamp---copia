FROM php:8-apache
#Per canviar se direccio actual
WORKDIR /var/www
ENV APACHE_DOCUMENT_ROOT /var/www/
# COPY php/ /var/www
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
# Pper actualtizar coses
RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y systemctl
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo pdo_mysql 
RUN systemctl restart apache2



