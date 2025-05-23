FROM debian:oldstable

RUN su -

RUN apt-get update -y && apt-get upgrade -y

RUN apt-get install sudo -y

RUN sudo apt-get install mariadb-server -y

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/.

COPY ./tools/init.sql /etc/mysql/init.sql

RUN mkdir /run/mysqld

ENTRYPOINT ["mysqld_safe"]