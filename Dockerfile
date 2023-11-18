FROM php:8.1-alpine

# install PHP extensions
RUN apk add --no-cache --virtual .build-ext-deps \
    coreutils \
    curl-dev \
    libedit-dev \
    libxml2-dev \
    sqlite-dev \
    && apk add --no-cache \
        bash \
        icu-dev \
        freetype \
        libpng-dev \
        libzip-dev \
        zip \
    && docker-php-ext-configure zip \
    && docker-php-ext-install -j$(nproc) calendar gd intl mysqli opcache pdo_mysql soap zip \
    && apk del .build-ext-deps

WORKDIR /app