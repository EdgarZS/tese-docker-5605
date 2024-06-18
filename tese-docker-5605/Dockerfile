
FROM php:8.0-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Configurar ServerName para evitar la advertencia
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Habilitar módulos de Apache que pueden ser útiles
RUN a2enmod rewrite

# Copiar el contenido del directorio src al directorio de Apache
COPY ./src /var/www/html
