all:
	@ sudo docker compose -f srcs/docker-compose.yml up -d --build

down:
	@ sudo docker compose -f srcs/docker-compose.yml down

re: down
	@ sudo docker compose -f srcs/docker-compose.yml up -d --build

clean:
	@ sudo docker stop $$(sudo docker ps -qa);\
	sudo docker rm $$(sudo docker ps -qa);\
	sudo docker rmi -f $$(sudo docker images -qa);\
	sudo docker volume rm $$(sudo docker volume ls -q);\
	sudo docker network rm $$(sudo docker network ls -q);\
	sudo rm -rf /home/anbourge/data/wordpress/* /home/anbourge/data/database/*

linux:
	@ echo ¨127.0.0.1 anbourge.42.fr¨ >> /etc/hosts

.PHONY: all re down clean linux