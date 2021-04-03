FROM linuxserver/nginx
LABEL maintainer=arevindh@protonmail.com

# ENV arch='x86_64'

RUN mkdir -p /config  &&  mkdir /app

COPY . /app/

COPY docker/conf/ /config/

# COPY --from=composer /usr/bin/composer /usr/bin/composer

EXPOSE 80 443

VOLUME ["/config"]
