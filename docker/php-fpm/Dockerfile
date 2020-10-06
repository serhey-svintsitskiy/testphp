FROM php:7.4-fpm

WORKDIR /var/www/web

RUN mkdir mkdir -p /usr/share/man/man1/ /usr/share/man/man7/ && apt-get update && apt-get install -y --no-install-recommends -f openssl libssl-dev libzip-dev ca-certificates libicu-dev libpq-dev curl zlib1g-dev libmemcached-dev wget zip unzip git phantomjs  imagemagick libmagickwand-dev libldb-dev libldap2-dev sshpass postgresql-client libc-client-dev libkrb5-dev iproute2 && rm -rf /var/lib/apt/lists/* && apt-get clean

RUN PHP_OPENSSL=yes docker-php-ext-configure imap --with-kerberos --with-imap-ssl && docker-php-ext-install zip pgsql pdo_pgsql bcmath sockets intl ldap gd exif imap && pecl install memcached xdebug imagick && docker-php-ext-enable memcached && docker-php-ext-enable xdebug &&  docker-php-ext-enable imagick

RUN curl -s https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer && wget -O phpunit https://phar.phpunit.de/phpunit-8.phar && chmod +x phpunit && mv phpunit /usr/local/bin/phpunit


