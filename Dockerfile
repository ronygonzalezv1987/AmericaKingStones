FROM php:8.1.2-fpm-alpine
WORKDIR /var/www
RUN apk update && apk add \
    build-base \ 
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    libzip-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

RUN docker-php-ext-install  pdo pdo_mysql 
#Install Redis Extention
#RUN apk add autoconf && pecl install -o -f redis \
#&& rm -rf /tmp/pear \
#&& docker-php-ext-enable redis && apk del autoconf

#RUN composer install 
COPY --from=composer:2.2.6 /usr/bin/composer /usr/bin/composer
COPY ./composer.* ./

RUN composer install \
    --no-dev \
    --prefer-dist \
    --no-interaction \
    --no-progress \
    --no-scripts \
    --optimize-autoloader

COPY .  ./
RUN addgroup -g 1000 -S www && \
    adduser -u 1000 -S www -G www 
USER www
 COPY --chown=www:www . /var/www

 EXPOSE 9000  
