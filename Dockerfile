FROM php:8.2-apache

# Enable Apache mod_rewrite for clean routing and .htaccess support
RUN a2enmod rewrite

# Install MySQL PDO extension (SQLite PDO is already built-in in PHP 8.2)
RUN docker-php-ext-install pdo pdo_mysql

# Copy website files to Apache webroot
COPY . /var/www/html/

# Grant write permissions for local SQLite database and file uploads
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 775 /var/www/html/database /var/www/html/assets/images

# Render dynamically sets the $PORT environment variable at runtime (e.g. 10000)
# We update Apache's port configuration before starting
CMD sed -i "s/80/$PORT/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf && apache2-foreground
