FROM wordpress:4.9.1-apache

COPY html /var/www/html
COPY application-insights /var/www/html/wp-content/plugins

RUN chown -R www-data:www-data /var/www/html/

ENTRYPOINT ["apache2-foreground"]
