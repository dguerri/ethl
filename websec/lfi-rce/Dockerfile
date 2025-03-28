FROM php:7.4-apache
LABEL name LFI_RCE_demo
LABEL version 1.0

# Set the working directory
WORKDIR /var/www/html

# Copy website files to the container
COPY html /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Ensure PHP sessions directory exists
RUN mkdir -p /var/lib/php/sessions && chmod 777 /var/lib/php/sessions

# Ensure Apache logs directory exists
RUN mkdir -p /var/log/apache2 && chmod -R 755 /var/log/apache2

# Modify php.ini to enable output buffering and PHP wrappers
RUN echo "output_buffering = On" > /usr/local/etc/php/conf.d/output_buffering.ini \
    && echo "allow_url_fopen = On" > /usr/local/etc/php/conf.d/allow_url_fopen.ini \
    && echo "allow_url_include = On" > /usr/local/etc/php/conf.d/allow_url_include.ini \
    && echo "session.save_path = /var/lib/php/sessions" > /usr/local/etc/php/conf.d/session_path.ini

RUN rm /var/log/apache2/access.log

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
