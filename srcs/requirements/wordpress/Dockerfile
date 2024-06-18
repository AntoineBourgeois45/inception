FROM	debian:buster

RUN		apt-get update && apt-get -y	install \
		wget \
		php \
		php-cgi \
		php-mysql \
		php-fpm \
		php-pdo \
		php-gd php-cli \
		php-mbstring
RUN		rm -rf /var/lib/apt/lists/*

COPY	conf/www.conf /etc/php/7.3/fpm/pool.d/

RUN		mkdir /run/php

COPY	conf/entrypoint.sh /usr/local/bin/
RUN		chmod +x /usr/local/bin/entrypoint.sh

ENTRYPOINT [ "/usr/local/bin/entrypoint.sh" ]

WORKDIR	/var/www/html/

EXPOSE	9000

CMD [ "/usr/sbin/php-fpm7.3", "-F" ]