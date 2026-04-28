# Contenedor: redis

Este contenedor provee la infraestructura para memoria caché y mensajería rápida.

## Especificaciones
- **Imagen Base**: `redis:7-alpine`
- **Rol**: Caché, Almacén de Sesiones y Broker de Tareas.

## Usos Específicos
1. **Sesiones**: `app-php` usa Redis en lugar de archivos para almacenar las sesiones de usuarios, permitiendo que la app sea stateless.
2. **Symfony Messenger**: Utilizado como el medio de transporte para enviar mensajes desde `app-php` hacia `worker-php`.
3. **Caché**: Almacenamiento temporal para acelerar queries del dashboard.
