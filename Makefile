all: uppies

data:
	mkdir -p /home/rfontes-/data/mariadb
	mkdir -p /home/rfontes-/data/wordpress

build: data
	sudo docker-compose -f ./srcs/docker-compose.yml build

up:
	sudo docker-compose -f ./srcs/docker-compose.yml up -d

uppies: data
	sudo docker-compose -f ./srcs/docker-compose.yml up --build

down:
	sudo docker-compose -f ./srcs/docker-compose.yml down --rmi all

info:
	@echo Container info:
	@sudo docker ps
	@echo Volume info:
	@sudo docker volume ls
	@echo network info:
	@sudo docker network ls

clean_v:
	sudo rm -rf /home/rfontes-/data/

enter_wp:
	sudo docker exec -it wordpress-c bash

enter_maria:
	sudo docker exec -it mariadb-c bash

enter_nginx:
	sudo docker exec -it nginx-c bash