FROM debian:oldstable

RUN su -

RUN apt-get update -y

RUN apt-get install sudo -y

RUN sudo apt update -y && sudo apt upgrade -y

RUN sudo apt install mariadb-server -y

#RUN sudo mysql_secure_installation

ENTRYPOINT ["tail", "-f"]