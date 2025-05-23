FROM debian:oldstable

RUN su -

RUN apt-get update -y && apt-get upgrade -y

RUN apt-get install sudo -y

RUN sudo apt-get install php-fpm -y

RUN sudo apt-get install php7.4-mysqli -y

RUN sudo apt-get install curl -y

RUN sudo mkdir -p /run/php/ && sudo chown -R www-data:www-data /run/php

COPY ./conf/www.conf /etc/php/7.4/fpm/pool.d/.

RUN sudo apt-get install wordpress -y

COPY ./tools/wp.sh .

RUN chmod +x wp.sh

ENTRYPOINT ["./wp.sh"]