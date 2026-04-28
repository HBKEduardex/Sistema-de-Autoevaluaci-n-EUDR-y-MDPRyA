# Contenedor: db-postgres

Este contenedor proporciona la base de datos relacional para todo el sistema.

## Especificaciones
- **Imagen Base**: `postgres:16-alpine`
- **Rol**: Almacenamiento persistente relacional.
- **Volumen**: Usa un volumen de Docker (`postgres_data`) para persistir la data incluso si el contenedor es destruido.

## Operación
- Se configura a través de las variables en `.env` (`DB_NAME`, `DB_USER`, `DB_PASSWORD`).
- Puede accederse externamente (por ej. desde DBeaver/DataGrip) si se expone el puerto `5432` en el `docker-compose.yml`.
