FROM debian:oldstable

RUN su -

RUN apt-get update -y

RUN apt-get install sudo -y

RUN sudo apt update -y && sudo apt upgrade -y

RUN sudo apt install nginx -y

COPY default /etc/nginx/sites-available/.

ENTRYPOINT ["nginx", "-g", "daemon off;"]