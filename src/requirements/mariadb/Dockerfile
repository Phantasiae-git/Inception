FROM debian:oldstable

RUN su -

RUN apt-get update -y && apt-get upgrade -y

RUN apt-get install sudo -y

RUN sudo apt-get install mariadb-server -y

ENTRYPOINT ["mariadbd-safe"]