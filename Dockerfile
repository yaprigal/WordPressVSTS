FROM wordpress:latest

COPY html /var/www/html
COPY application-insights /var/www/html/wp-content/plugins

RUN chown -R www-data:www-data /var/www/html/

ENTRYPOINT ["apache2-foreground"]
