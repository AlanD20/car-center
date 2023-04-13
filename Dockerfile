FROM alpine:edge

LABEL fly_launch_runtime="car-center"

RUN apk update && apk upgrade

# add useful utilities
RUN apk add curl \
  zip \
  unzip \
  ssmtp \
  tzdata

# php, with assorted extensions we likely need
RUN apk add php \
  php-fpm \
  php-cli \
  php-session \
  php-soap \
  php-openssl \
  php-gmp \
  # php-pdo_odbc \
  php-json \
  php-dom \
  php-pdo \
  php-zip \
  php-pdo_mysql \
  # php-sqlite3 \
  # php-pdo_pgsql \
  php-bcmath \
  php-gd \
  php-odbc \
  # php-pdo_sqlite \
  php-gettext \
  php-xmlreader \
  php-bz2 \
  php-iconv \
  php-pdo_dblib \
  php-curl \
  php-ctype \
  php-phar \
  php-xml \
  php-common \
  php-mbstring \
  php-tokenizer \
  php-xmlwriter \
  php-fileinfo \
  php-opcache \
  php-simplexml

# node, for Laravel mix
RUN apk add nodejs npm \
  # supervisor, to support running multiple processes in a single app
  supervisor \
  # nginx (https://wiki.alpinelinux.org/wiki/Nginx)
  nginx \
  # htop, which is useful if need to SSH in to the vm
  htop

# ... with custom conf
RUN cp /etc/nginx/nginx.conf /etc/nginx/nginx.old.conf && rm -rf /etc/nginx/http.d/default.conf

# composer, to install Laravel's dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# add users (see https://www.getpagespeed.com/server-setup/nginx-and-php-fpm-what-my-permissions-should-be)
# 1. a user for the app and php-fpm to interact with it (execute)
RUN adduser -D -u 1000 -g 'app' app
# 2. a user for nginx is not needed because already have one
# ... and add the nginx user TO the app group else it won't have permission to access web files (as can see in /var/log/nginx/error.log)
RUN addgroup nginx app

# use a socket not port for php-fpm so php-fpm needs permission to write to thay folder (make sure the same .sock is in nginx.conf and in php-fpm's app.conf)
RUN mkdir /var/run/php && chown -R app:app /var/run/php

# working directory
RUN mkdir -p /var/www/car-center
WORKDIR /var/www/car-center

# copy app code across, skipping files based on .dockerignore
COPY . /var/www/car-center
# ... install Laravel dependencies
RUN cd laravel && composer update && composer install --optimize-autoloader --no-dev
# ... and make all files owned by app, including the just added /vendor
RUN chown -R app:app /var/www/car-center

# Configure crontab for Supervisord to use
# ! Currently the app doesn't need Laravel scheduler
# RUN /usr/bin/crontab docker/crontab

# move the docker-related conf files out of the app folder to where on the vm they need to be
RUN rm -rf /etc/php81/php-fpm.conf
RUN rm -rf /etc/php81/php-fpm.d/www.conf
RUN mv docker/supervisor.conf /etc/supervisord.conf
RUN mv docker/nginx.conf /etc/nginx/nginx.conf
RUN mv docker/php.ini /etc/php81/conf.d/php.ini
RUN mv docker/php-fpm.conf /etc/php81/php-fpm.conf
RUN mv docker/app.conf /etc/php81/php-fpm.d/app.conf


# Laravel's demo app does not need mix however real apps likely will (optimize js/css) so install and then run that:
RUN cd laravel && npm install && npm run build

# if need to upload to /storage (but shouldn't as its ephemeral unless mounted to a volume?)
#RUN chmod -R ug+w /var/www/html/storage

# clear Laravel cache that may be left over
RUN cd laravel && composer dump-autoload -o && npm run storage:link
RUN cd laravel && php artisan migrate:fresh --seed --force


# make sure can execute php files (since php-fpm runs as app, it needs permission e.g for /storage/framework/views for caching views)
RUN chmod -R 755 /var/www/car-center
RUN chmod -R 775 /var/www/car-center/laravel/storage
RUN chmod -R 775 /var/www/car-center/laravel/bootstrap/cache

RUN cd laravel && npm run cache:clear

# ... now don't need /node_modules so might as well delete that
# RUN rm -rf node_modules
# ... and don't need node and npm so might as well delete them
# RUN apk del nodejs npm

# the same port nginx.conf is set to listen on and fly.toml references (standard is 8080)
EXPOSE 8080

# off we go (since no docker-compose, keep both nginx and php-fpm running in the same container by using supervisor) ...
ENTRYPOINT ["supervisord", "-c", "/etc/supervisord.conf"]
