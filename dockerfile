# Use an official PHP image with Apache
FROM php:8.2-apache

# Set the working directory
WORKDIR /var/www/html

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli

# Copy the application code to the container
COPY . /var/www/html

# Provide write permissions to Apache
RUN chown -R www-data:www-data /var/www/html \
  && chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
