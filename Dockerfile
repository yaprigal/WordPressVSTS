FROM wordpress:latest

# installs php zip extensions - used for plugins like duplicator

# Copy the existing app into our wp directory

COPY html /var/www/html
COPY application-insights /var/www/html/wp-content/plugins

RUN chown -R www-data:www-data /var/www/html/

ENTRYPOINT ["apache2-foreground"]