#!/bin/bash
cd /var/www/html
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
sleep 8
chmod +x wp-cli.phar
./wp-cli.phar core download --allow-root
./wp-cli.phar config create --dbname=wordpress --dbuser=wpuser --dbpass=password --dbhost=mariadb-c --allow-root
./wp-cli.phar core install --url=localhost --title=inception --admin_user=rfontes- --admin_password=ya --admin_email=raquel.e5317@gmail.com --allow-root
./wp-cli.phar user create user user@ya.com --role=subscriber --user_pass=yauser --allow-root

php-fpm7.4 -F