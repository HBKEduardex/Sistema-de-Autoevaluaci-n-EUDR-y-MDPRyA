# Sistema de Autoevaluación EUDR y Gestión de Riesgos

Este repositorio contiene el MVP completo del sistema diseñado bajo una arquitectura de **Monolito Modular** en PHP/Symfony, contenerizado mediante Docker.

## Arquitectura y Módulos

El sistema está construido pensando en una futura integración con un portal PHP legacy (SIEXCO/VCI). Por ende, no es una gran red de microservicios, sino **un solo monolito modular (app-php)**, estructurado internamente por dominios (Auth, Organizations, Compliance, Risks, etc.).

Los 6 contenedores principales de infraestructura son:
1. `app-php`: Procesador central (Symfony + PHP-FPM).
2. `web-nginx`: Proxy inverso HTTP que expone el puerto al público.
3. `db-postgres`: Base de datos de negocio y auditoría.
4. `redis`: Backend de caché, mensajería asíncrona y almacenamiento de sesiones.
5. `worker-php`: Consumidor de Symfony Messenger (ejecuta tareas pesadas como PDF/Excel).
6. `minio`: Almacenamiento seguro en la nube tipo S3 para evidencias y adjuntos.

---

## 🚀 Guía Rápida de Operación

### 1. Inicialización en Desarrollo / Staging

```bash
# Copiar variables de entorno
cp .env.example .env

# Levantar infraestructura en segundo plano
make up

# Instalar dependencias base
make install-deps

# Limpiar caché
sudo docker exec -it eudr_app_php php bin/console cache:clear
```

### 2. Base de Datos y Datos Iniciales (Seeders)

Una vez que Postgres esté listo, debes generar el esquema e insertar los datos base (admin, evaluador, empresa).

```bash
# Crear las tablas en la BD a partir de las entidades
sudo docker exec -it eudr_app_php php bin/console doctrine:schema:update --force

# Cargar el Seeder (Fixtures) de la Fase 4
sudo docker exec -it eudr_app_php php bin/console doctrine:fixtures:load -n
```

---

## 🛠 Trabajadores Asíncronos (Colas)

El contenedor `worker-php` se encarga de escuchar a `redis`. Si deseas enviar un mensaje a la cola para probar el proceso asíncrono (simulación de exportación de PDF), puedes inyectar un mensaje desde la terminal de `app-php`:

```bash
sudo docker exec -it eudr_app_php php bin/console messenger:consume async -vv
```
*(Nota: El contenedor `worker-php` ya ejecuta este comando permanentemente bajo el capó).*

---

## 📈 Recomendaciones para Servidor Potente (Producción)

Si vas a migrar esto a un servidor dedicado Linux de alta capacidad:

1. **Variables de Entorno Mínimas (`.env.local`)**:
   - Cambia `APP_ENV=prod`.
   - Modifica `APP_SECRET` por una cadena segura de 32+ caracteres.
   - Modifica credenciales de DB, Redis y MinIO con contraseñas fuertes.

2. **Ajustes de PHP-FPM (`php.ini`)**:
   - Ajusta `opcache.memory_consumption=512` y `opcache.max_accelerated_files=50000` si hay mucha RAM.
   - Sube `pm.max_children` en el pool de FPM a 50 o 100 dependiendo de los cores del servidor para aceptar más tráfico simultáneo.

3. **Escalado del Worker**:
   - En un servidor potente, puedes levantar múltiples replicas del worker modificando `docker-compose.yml` (`deploy: replicas: 3` en `worker-php`).

4. **Persistencia y Backups**:
   - Los volúmenes `postgres_data` y `minio_data` son el tesoro de tu aplicación. Configura tareas cron en el servidor (o contenedores de respaldo anexos) para hacer dump de Postgres a S3 externamente todas las noches.

5. **Proxy Inverso Edge**:
   - Se recomienda poner un Traefik, HAProxy o Nginx Proxy Manager "delante" de nuestro `web-nginx` local para manejar los certificados SSL de Let's Encrypt y protección WAF (Cloudflare).
