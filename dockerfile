FROM php:7.4.26-apache

COPY index.php /var/www/html
RUN docker-php-ext-install mysqli

RUN chgrp --recursive www-data /var/www/html
RUN chown --recursive www-data /var/www/html
RUN chmod o-wx /var/www/html 
