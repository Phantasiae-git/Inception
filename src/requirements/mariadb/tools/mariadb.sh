#!/bin/bash
echo "CREATE DATABASE ${DB_NAME};" > /etc/mysql/init.sql
echo "CREATE USER '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASSWORD}';" >> /etc/mysql/init.sql
echo "GRANT ALL PRIVILEGES ON *.* TO '${DB_USER}'@'%';" >> /etc/mysql/init.sql
echo "FLUSH PRIVILEGES;" >> /etc/mysql/init.sql
sleep 5
mysqld_safe