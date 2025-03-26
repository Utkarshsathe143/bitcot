# Use an official PHP image with Apache
FROM php:8.0-apache

# Enable required PHP extensions
RUN docker-php-ext-install mysqli

# Copy application files to the container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Expose port 80 for web traffic
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
