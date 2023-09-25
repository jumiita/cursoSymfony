# Utiliza la imagen base de PHP 8.2
FROM php:8.2-fpm

# Actualiza el sistema e instala dependencias
RUN apt update \
    && apt install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

# Establece el directorio de trabajo
WORKDIR /var/www/symfony_docker

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala Symfony CLI 6.3 directamente desde su repositorio utilizando curl
RUN curl -LO https://github.com/symfony/cli/releases/download/v6.3.0/symfony_linux_amd64
RUN chmod +x symfony_linux_amd64
RUN mv symfony_linux_amd64 /usr/local/bin/symfony

# Configura la información global del usuario de Git
RUN git config --global user.email "jumita12@gmail.com" && git config --global user.name "juma"
