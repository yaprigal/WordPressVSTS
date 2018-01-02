FROM wordpress:latest

COPY html /var/www/html

RUN chown -R www-data:www-data /var/www/html/

ENTRYPOINT ["apache2-foreground"]
