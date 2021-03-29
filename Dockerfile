FROM linuxserver/nginx
LABEL maintainer=arevindh@protonmail.com

ENV arch='x86_64'

RUN mkdir -p /config 

COPY . /config/www/

COPY docker/conf/ /config/

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /config/www/

RUN mkdir -p /config/log/homelab
RUN touch /config/log/homelab/cron.log
RUN touch /config/log/homelab/queue.log
RUN chown abc:abc /config/log/homelab

EXPOSE 80 443

VOLUME ["/config"]
