FROM debian:oldstable

RUN su -

RUN apt-get update -y && apt-get upgrade -y

RUN apt-get install sudo -y

RUN sudo apt-get install nginx -y

RUN sudo apt-get install openssl -y

RUN mkdir -p /etc/nginx/certs

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/certs/nginx-selfsigned.key -out /etc/nginx/certs/nginx-selfsigned.crt -subj "/C=PT/ST=Lisboa/L=Lisboa/O=42Lisboa/OU=student/CN=rfontes-.42.fr"

RUN chmod 666 /etc/nginx/certs/nginx-selfsigned.key && chmod 666 /etc/nginx/certs/nginx-selfsigned.crt

COPY ./conf/nginx.conf /etc/nginx/sites-available/default

ENTRYPOINT ["nginx", "-g", "daemon off;"]