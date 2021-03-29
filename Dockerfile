FROM linuxserver/nginx
LABEL maintainer=arevindh@protonmail.com

ENV arch='x86_64'

RUN mkdir -p /config 

COPY . /config/www/

COPY docker/conf/ /config/

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /config/www/

RUN mkdir -p /config/log/homelab &&  touch /config/log/homelab/cron.log && touch /config/log/homelab/cron-retry.log && touch /config/log/homelab/queue.log && chown abc:abc /config/log/homelab

EXPOSE 80 443

VOLUME ["/config"]
