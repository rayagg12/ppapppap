FROM mysql:latest
# ENV MYSQL_ROOT_PASSWORD: peepsqueak
ENV MYSQL_ALLOW_EMPTY_PASSWORD=yes
COPY redlock-db.sql /docker-entrypoint-initdb.d/


EXPOSE 3306
