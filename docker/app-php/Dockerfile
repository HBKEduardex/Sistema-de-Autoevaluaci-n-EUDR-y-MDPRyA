FROM php:8.2-fpm-alpine

# Instalar dependencias del sistema requeridas por Symfony y Postgres
RUN apk add --no-cache \
    $PHPIZE_DEPS \
    acl \
    fcgi \
    file \
    gettext \
    git \
    make \
    linux-headers \
    libpq-dev \
    postgresql-dev \
    icu-dev \
    libzip-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev

# Instalar extensiones de PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-configure zip \
    && docker-php-ext-install -j$(nproc) \
        gd \
        intl \
        pdo_pgsql \
        zip \
        opcache

# Instalar extensión de Redis
RUN pecl install redis \
    && docker-php-ext-enable redis

# Copiar Composer desde la imagen oficial
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Configurar el directorio de trabajo
WORKDIR /var/www/html

# Copiar configuración personalizada de PHP si existe (opcional, mapeado en volumen)
# COPY docker/app-php/php.ini /usr/local/etc/php/conf.d/custom.ini

# Exponer el puerto de PHP-FPM
EXPOSE 9000

# El entrypoint por defecto para esta imagen es iniciar php-fpm
CMD ["php-fpm"]
