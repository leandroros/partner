# Selecciona una imagen base que incluya PHP y un servidor web (por ejemplo, php:apache)
FROM php:apache

# Copia los archivos de tu proyecto al directorio de trabajo en el contenedor
COPY . /var/www/html
RUN apt-get update
RUN apt-get install -y ssl-cert
RUN a2enmod ssl
RUN a2ensite default-ssl.conf
RUN chmod 777 /var/www/html/uploads
WORKDIR /var/www/html
EXPOSE 443 80
