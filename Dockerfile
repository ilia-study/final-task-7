FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_USER=lawliet
ENV MYSQL_PASSWORD=19283746ads
ENV MYSQL_DATABASE=accaunts

ADD schema.sql /docker-entrypoint-initdb.d

EXPOSE 3306