.PHONY: help up down build restart logs shell-app shell-db migrate migrate-diff seed cache-clear shell-worker install-deps init-symfony

# Variables
DOCKER_COMPOSE = docker compose
PHP_CONTAINER = eudr_app_php
WORKER_CONTAINER = eudr_worker_php

help: ## Muestra esta ayuda
	@echo "Comandos disponibles:"
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'

up: ## Levanta todos los contenedores en segundo plano
	$(DOCKER_COMPOSE) up -d

down: ## Apaga y remueve los contenedores
	$(DOCKER_COMPOSE) down

build: ## Reconstruye las imágenes de Docker
	$(DOCKER_COMPOSE) build

restart: ## Reinicia los contenedores
	$(DOCKER_COMPOSE) restart

logs: ## Muestra los logs de todos los contenedores
	$(DOCKER_COMPOSE) logs -f

shell-app: ## Entra a la consola bash del contenedor PHP (Aplicación)
	docker exec -it $(PHP_CONTAINER) bash

shell-worker: ## Entra a la consola bash del contenedor Worker
	docker exec -it $(WORKER_CONTAINER) bash

shell-db: ## Entra a la consola psql de PostgreSQL
	docker exec -it eudr_db_postgres psql -U eudr_user -d eudr_db

install-deps: ## Instala dependencias de Composer (requiere contenedores arriba)
	docker exec -it $(PHP_CONTAINER) composer install

migrate: ## Ejecuta las migraciones de Doctrine en la BD
	docker exec -it $(PHP_CONTAINER) php bin/console doctrine:migrations:migrate --no-interaction

migrate-diff: ## Genera una nueva migración de Doctrine basada en entidades
	docker exec -it $(PHP_CONTAINER) php bin/console doctrine:migrations:diff

seed: ## Carga datos de prueba a la BD
	docker exec -it $(PHP_CONTAINER) php bin/console doctrine:fixtures:load --no-interaction

cache-clear: ## Limpia la caché de Symfony
	docker exec -it $(PHP_CONTAINER) php bin/console cache:clear

init-symfony: ## Comando útil (solo la primera vez) para inicializar symfony si la carpeta src está vacía
	docker exec -it $(PHP_CONTAINER) composer create-project symfony/skeleton tmp_sf
	docker exec -it $(PHP_CONTAINER) sh -c "cp -r tmp_sf/* . && cp -r tmp_sf/.* . 2>/dev/null || true && rm -rf tmp_sf"
