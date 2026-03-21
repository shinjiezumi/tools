FROM mysql:8.0-debian

RUN apt-get update && apt-get install -y --no-install-recommends \
    vim

COPY ./init/* /docker-entrypoint-initdb.d/
