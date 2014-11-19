NameSpace = est en PHP
géger le conflit av le nom réservé
éviter kes nom de class à ralonge



télécharger composer

symfony.com
DOWNLOAD (VERT)
what is composer ans hox install it
-> getcomposer.org/download
php -r "readfile('https://getcomposer.org/installer');" | php

-> copier cet line dans la comande terminal après avoir fait" cd sites" pour arriver sur sites ( ou www chez nous) , on aura composer.phar

dans command :

pour ecrire 1 command , il fo tj :php composer.phar -> on verra ts les command

ce qu'on voit sur l'internet après cliker que download:

$ composer create-project symfony/framework-standard-edition path/

dans commnade :

php composer.phar,
puis copier coller la partie create-project symfony/framework-standard-edition
puis le path : c'est le nom de notre dossier , ex : myFirstSymfoProject

donc la commande complète pr installer symfony en dessous
myFirstSymfoProject
/******************************/


installer symfony

dans la commande :


php composer.phar create-project symfony/framework-standard-edition myFirstSymfoProject

il faut attender longtemps pour que ça télécharge


Would you like to install Acme demo bundle? [y/N] N
Creating the "app/config/parameters.yml" file
Some parameters are missing. Please provide them.
database_driver (pdo_mysql):
database_host (127.0.0.1):
database_port (null):
database_name (symfony):
database_user (root):
database_password (null):
mailer_transport (smtp):
mailer_host (127.0.0.1):
mailer_user (null):
mailer_password (null):
locale (en):
secret (ThisTokenIsNotSoSecretChangeIt):
debug_toolbar (true):
debug_redirects (false):
use_assetic_controller (true):
Clearing the cache for the dev environment with debug true
Installing assets as hard copies
Installing assets for Symfony\Bundle\FrameworkBundle into web/bundles/framework
Installing assets for Sensio\Bundle\DistributionBundle into web/bundles/sensiodistribution

