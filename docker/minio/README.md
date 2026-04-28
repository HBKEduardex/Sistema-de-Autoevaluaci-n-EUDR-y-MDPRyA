# Contenedor: minio

Este contenedor proporciona almacenamiento de objetos (Object Storage) compatible 100% con la API de AWS S3.

## Especificaciones
- **Imagen Base**: `minio/minio`
- **Rol**: Repositorio de evidencias y documentos adjuntos.
- **Volumen**: Usa `minio_data` para no perder las evidencias.

## Acceso
- **API (S3)**: Puerto `9000`. Usado internamente por Symfony (Flysystem) para leer/escribir archivos.
- **Consola Web**: Puerto `9001`. Interfaz web para administradores para revisar manualmente los buckets y archivos subidos.

## Operación
Durante la inicialización en un ambiente real, se requiere que el bucket (`eudr-evidences` por defecto en el `.env`) sea creado manual o automáticamente antes de subir el primer archivo.
