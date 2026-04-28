# Contenedor: web-nginx

Este contenedor actúa como el único punto de entrada público (puerto 80/443 en el futuro).

## Especificaciones
- **Imagen Base**: `nginx:1.25-alpine`
- **Rol**: Proxy Inverso y Servidor de Archivos Estáticos.
- **Puertos**: Expone el puerto `8000` al host de manera predeterminada.

## Configuraciones Notables
- Sirve directamente archivos CSS, JS e imágenes alojadas en `/var/www/html/public`.
- Redirige toda petición dinámica (PHP) hacia `app-php:9000` usando el protocolo FastCGI.
- Configura `client_max_body_size 50M` para permitir subidas de evidencias.

## Archivo de Configuración
Ver `default.conf` para la configuración de redirección a Symfony.
