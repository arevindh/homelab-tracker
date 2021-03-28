FROM linuxserver/nginx
LABEL maintainer=arevindh@protonmail.com

ENV arch='x86_64'

RUN mkdir -p /config 

COPY . /config/www/

COPY docker/conf/ /config/


COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /config/www/

RUN composer install

EXPOSE 80 443

VOLUME ["/config"]
