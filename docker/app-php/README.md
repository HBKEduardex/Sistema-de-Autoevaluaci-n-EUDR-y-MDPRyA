# Contenedor: app-php

Este contenedor alberga el núcleo de la aplicación. 

## Especificaciones
- **Imagen Base**: `php:8.2-fpm-alpine`
- **Rol**: Servidor de aplicaciones (procesa el código PHP de Symfony).
- **Puertos**: Expone el puerto `9000` (interno) para comunicarse con `web-nginx`. No es accesible desde el exterior.

## Configuraciones Notables
- Contiene extensiones de PHP clave compiladas (`intl`, `pdo_pgsql`, `zip`, `opcache`, `redis`).
- Se le inyecta la configuración de `php.ini` a través de un volumen en `docker-compose.yml` para definir límites (ej. `upload_max_filesize = 50M`).
- Está configurado para almacenar las sesiones directamente en Redis mediante `session.save_handler`.

## Operación
No se debe servir contenido estático desde aquí. Toda petición llega a través del contenedor de Nginx.
