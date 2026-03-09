FROM php:8.5-apache

# Installation des outils de compression (indispensable pour Composer)
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libcurl4-openssl-dev \
    pkg-config \
    libssl-dev


# PDO INSTALL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Installation de l'extension MongoDB
RUN pecl install mongodb && docker-php-ext-enable mongodb

# INSTALLATION DE COMPOSER
# On récupère le fichier binaire de l'image officielle et on le place dans /usr/bin/
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# recuperer la config virtual host (Root = app/public)
COPY docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

# WORKINGDIR
WORKDIR /var/www/html

## URL REWRITING
    # Activer mod_rewrite
    RUN a2enmod rewrite

    # Autoriser les .htaccess
    RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf