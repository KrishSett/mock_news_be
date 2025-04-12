# Use the official PHP image with Apache
FROM php:8.2-apache

# Enable Apache mod_rewrite (for clean URLs, Laravel, etc.)
RUN a2enmod rewrite

# Install necessary PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Optional: copy custom php.ini (if you need custom settings)
#COPY php.ini /usr/local/etc/php/

# Set the document root to the public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Update Apache config to reflect the new document root
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf

# Copy everything from the host to the container
COPY . /var/www/html

# Set permissions (optional, useful for Laravel)
# RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html
