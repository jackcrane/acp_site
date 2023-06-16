# Base image
FROM php:latest

# Set working directory
WORKDIR /var/www/html

# Copy application files to the container
COPY . /var/www/html

# Expose port (optional)
EXPOSE 80

# Start the PHP development server
CMD ["php", "-S", "0.0.0.0:80"]
