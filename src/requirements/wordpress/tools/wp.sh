#!/bin/bash
cd /var/www/html
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
sleep 8
chmod +x wp-cli.phar
./wp-cli.phar core download --allow-root
./wp-cli.phar config create --dbname=${DB_NAME} --dbuser=${DB_USER} --dbpass=${DB_PASSWORD} --dbhost=${DB_HOST} --allow-root
./wp-cli.phar core install --url=${DOMAIN_NAME} --title=${TITLE} --admin_user=${WP_ADMIN} --admin_password=${WP_ADMIN_PASSWORD} --admin_email=${WP_ADMIN_EMAIL} --allow-root
./wp-cli.phar user create ${WP_USER} ${WP_USER_EMAIL} --role=subscriber --user_pass=${WP_USER_PASSWORD} --allow-root

php-fpm7.4 -F