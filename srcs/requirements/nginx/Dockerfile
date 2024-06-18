FROM	debian:buster

RUN		apt-get update && apt-get -y install nginx openssl 
RUN		rm -rf /var/lib/apt/lists/*

RUN 	mkdir -p /etc/ssl

RUN		openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
			-subj "/C=FR/ST=IDF/L=Paris/O=42/OU=anbourge/CN=localhost/" \
			-keyout /etc/ssl/anbourge.42.fr.key \
			-out /etc/ssl/anbourge.42.fr.pem

COPY	conf/nginx.conf /etc/nginx/conf.d/default.conf

RUN		mkdir -p /run/nginx

EXPOSE 	443

CMD [ "nginx", "-g", "daemon off;" ]