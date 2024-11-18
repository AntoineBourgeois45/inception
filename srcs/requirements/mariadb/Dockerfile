FROM	debian:buster

RUN		apt-get update && apt-get -y install mariadb-server mariadb-client bash
RUN		rm -rf /var/lib/apt/lists/*

RUN		rm -f	/etc/mysql/my.cnf \
				/etc/my.cnf \
				~/my.cnf \
				/usr/local/etc/my.cnf \
				/etc/my.cnf.d/mariadb-server.cnf

COPY	conf/mariadb.conf /etc/mysql/my.cnf
COPY	conf/mariadb.conf /etc/my.cnf
COPY	conf/mariadb.conf ~/my.cnf
COPY	conf/mariadb.conf /usr/local/etc/my.cnf
COPY	conf/mariadb.conf /etc/my.cnf.d/mariadb-server.cnf
COPY	conf/debian.cnf /etc/mysql/debian.cnf

RUN		mkdir -p /var/run/mysqld/
RUN		chown -R mysql:mysql /var/run/mysqld
RUN		chmod 777 /var/run/mysqld

RUN		mkdir -p /var/lib/mysql
RUN		chown -R mysql:mysql /var/lib/mysql
RUN		chmod 777 /var/lib/mysql

COPY	conf/entrypoint.sh /usr/local/bin
RUN		chmod +x /usr/local/bin/entrypoint.sh

COPY	conf/wordpress.sql /usr/local/bin
RUN		chmod +x /usr/local/bin/wordpress.sql

EXPOSE	3306

ENTRYPOINT	[ "./usr/local/bin/entrypoint.sh" ]

CMD [ "mysqld", "--bind-address=0.0.0.0" ]