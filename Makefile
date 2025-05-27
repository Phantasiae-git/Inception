all: uppies

data:
	mkdir -p ./home/rfontes-/data/mariadb
	mkdir -p ./home/rfontes-/data/wordpress

build: data
	sudo docker-compose -f ./src/docker-compose.yml build

up:
	sudo docker-compose -f ./src/docker-compose.yml up -d

uppies: data
	sudo docker-compose -f ./src/docker-compose.yml up --build

down:
	sudo docker-compose -f ./src/docker-compose.yml down

clean_c:
	sudo docker rm -vf $(sudo docker ps -aq)

clean_i:
	sudo docker rmi -f $(sudo docker images -aq)

enter_wp:
	sudo docker exec -it wordpress-c bash

enter_maria:
	sudo docker exec -it mariadb-c bash

enter_nginx:
	sudo docker exec -it nginx-c bash