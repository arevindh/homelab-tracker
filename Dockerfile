FROM linuxserver/nginx
LABEL maintainer=arevindh@protonmail.com

ENV arch='x86_64'

RUN mkdir -p /config 

COPY . /config/www/

EXPOSE 80 443

VOLUME ["/config"]
