FROM php:7-fpm
# Install modules
RUN apt-get update && apt-get install -y \
	libmcrypt-dev \
	libicu-dev \
	libonig-dev \
	libc-dev \
	mariadb-client \
	default-mysql-client \
	libmcrypt-dev \
	&& docker-php-ext-install pdo_mysql \
	&& docker-php-ext-install iconv \
	&& docker-php-ext-install intl \
	&& docker-php-ext-install opcache

RUN docker-php-ext-install bcmath && \
    docker-php-ext-install mbstring && \
	docker-php-ext-configure mbstring

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

CMD ["php-fpm"]