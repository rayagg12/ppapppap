FROM php:8.1-apache
COPY index.php /var/www/html
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
#permit
RUN chmod o-wx /var/www/html/index.php
RUN chown -R www-data:www-data /var/www/html