FROM debian:oldstable

RUN su -

RUN apt-get update -y

RUN apt-get install sudo -y

RUN sudo apt update -y && sudo apt upgrade -y

RUN sudo apt-get install php-fpm -y

RUN sudo mkdir -p /run/php/

COPY www.conf /etc/php/7.4/fpm/pool.d/.

RUN sudo apt-get install wordpress -y

ENTRYPOINT ["php-fpm7.4", "-F"]