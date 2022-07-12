#!/bin/bash

docker-compose up -d
echo "Building NGINX and PHP images..."
sleep 1
echo "Connecting to database..."
sleep 10
docker exec -i mysql-container mysql -hmysql -uroot -psecret db < ./mysql/langue.sql
echo 'Website now accessible through localhost:80...'
