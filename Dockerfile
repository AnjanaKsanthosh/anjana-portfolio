FROM php:8.2-apache

# Enable Apache mod_rewrite for clean routing and .htaccess support
RUN a2enmod rewrite

# Install MySQL PDO extension (SQLite PDO is already built-in in PHP 8.2)
RUN docker-php-ext-install pdo pdo_mysql

# Copy website files to Apache webroot
COPY . /var/www/html/

# If files were pushed inside an 'anjana-portfolio' subfolder, move them to root
RUN if [ -d "/var/www/html/anjana-portfolio" ]; then \
        cp -rn /var/www/html/anjana-portfolio/* /var/www/html/ 2>/dev/null || true; \
    fi

# Ensure database and image directories exist with -p (never fails), then grant permissions
RUN mkdir -p /var/www/html/database /var/www/html/assets/images /var/www/html/assets/images/projects \
    && chown -R www-data:www-data /var/www/html/ \
    && chmod -R 775 /var/www/html/

# Render dynamically sets $PORT at runtime (defaults to 80 if not set)
CMD sed -i "s/80/${PORT:-80}/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf && apache2-foreground
