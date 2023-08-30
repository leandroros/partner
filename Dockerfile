# Selecciona una imagen base que incluya PHP y un servidor web (por ejemplo, php:apache)
FROM php:apache

# Copia los archivos de tu proyecto al directorio de trabajo en el contenedor
COPY . /var/www/html/
RUN apt -y update && apt -y install nano
RUN chmod 777 /var/www/html/uploads
EXPOSE 443 80