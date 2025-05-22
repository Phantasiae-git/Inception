FROM debian:oldstable

RUN su -

RUN apt-get update -y && apt-get upgrade -y

RUN apt-get install sudo -y

RUN sudo apt-get install nginx -y

COPY ./conf/nginx.conf /etc/nginx/sites-available/default

ENTRYPOINT ["nginx", "-g", "daemon off;"]