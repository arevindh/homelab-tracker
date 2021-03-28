FROM linuxserver/nginx
LABEL maintainer=arevindh@protonmail.com

ENV arch='x86_64'

RUN mkdir -p /config 

COPY . /config/www/

COPY docker/conf/nginx/site-confs/default /config/nginx/site-confs/default

EXPOSE 80 443

VOLUME ["/config"]
