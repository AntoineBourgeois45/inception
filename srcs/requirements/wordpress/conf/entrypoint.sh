#!/bin/sh

if [ -f ./wp-config.php ]
then

	echo "Wordpress already exists"

else

	wget	https://fr.wordpress.org/wordpress-6.1-fr_FR.tar.gz
	tar xfz	wordpress-6.1-fr_FR.tar.gz
	mv		wordpress/* .
	rm -rf	wordpress-6.1-fr_FR.tar.gz
	rm -rf	wordpress

	sed -i	"s/votre_utilisateur_de_bdd/$MYSQL_USER/g" wp-config-sample.php
	sed -i	"s/votre_mdp_de_bdd/$MYSQL_PASSWORD/g" wp-config-sample.php
	sed -i	"s/localhost/$MYSQL_HOSTNAME/g" wp-config-sample.php
	sed -i	"s/votre_nom_de_bdd/$MYSQL_DATABASE/g" wp-config-sample.php
	mv wp-config-sample.php wp-config.php

fi

exec "$@"