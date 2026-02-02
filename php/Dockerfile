FROM php:8.2-apache 

 

# Instala y habilita la extensión mysqli 

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli 

 

# Copia la aplicación al contenedor 

COPY index.php /var/www/html/ 

 

# Establece permisos 

RUN chown -R www-data:www-data /var/www/html 

RUN chmod -R 755 /var/www/html 

 

# Expone el puerto 80 

EXPOSE 80 