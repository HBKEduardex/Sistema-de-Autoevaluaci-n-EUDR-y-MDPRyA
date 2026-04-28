# Contenedor: worker-php

Este contenedor procesa las tareas asíncronas de larga duración para no bloquear la experiencia del usuario.

## Especificaciones
- **Imagen Base**: Usa el mismo `Dockerfile` y código de la aplicación que `app-php`.
- **Rol**: Consumidor de colas (Symfony Messenger).
- **Entrypoint Custom**: En lugar de ejecutar `php-fpm`, ejecuta el comando `php bin/console messenger:consume`.

## Tareas Esperadas (Fase 4)
- Generación de reportes PDF pesados.
- Consolidación y exportación a Excel.
- Procesamiento en batch de planes de mejora.
- Envío de notificaciones (si se implementa).
