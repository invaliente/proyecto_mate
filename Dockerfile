FROM php:8.2-apache

# Habilitar la extensión para conectarse a MySQL
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copiar todo lo que está dentro de rebolledo directamente a la raíz del servidor Apache
COPY rebolledo/ /var/www/html/

# Darle los permisos correctos a los archivos
RUN chown -R www-data:www-data /var/www/html/
