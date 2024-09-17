ARG php_version=8.3
ARG composer_version=2.2.24

FROM php:${php_version}

RUN apt update && apt install -y \
    git

COPY --from=composer:2.2.24 /usr/bin/composer /usr/bin/

