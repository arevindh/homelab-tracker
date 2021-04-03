FROM linuxserver/nginx
LABEL maintainer=arevindh@protonmail.com

# ENV arch='x86_64'

RUN mkdir -p /app/config/www

COPY . /app/config/www

COPY docker/conf/ /app/config

# COPY --from=composer /usr/bin/composer /usr/bin/composer

EXPOSE 80 443

VOLUME ["/config"]
