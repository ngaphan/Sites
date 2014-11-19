<?php

header('Content-type:text/html ; charset= UTF-8');

// http://192.168.1.99/ShareCode/bfi

// conection à la base de données
require_once'dbconnect.php';

// chargement des classes

require_once 'element.class.php';
require_once 'being.class.php';
require_once'character-manager.class.php';
require_once'character.class.php';
require_once'weapon-manager.class.php';
require_once'weapon.class.php';
require_once'dragon-manager.class.php';
require_once'dragon.class.php';


//gestion du menu(= des rubriques )
require_once'menu.php';

// Gestion des actions
require_once'actions.php';

/*
$dragonManager = new DragonManager($PDOConnectionObject);

$dragonsArray = $dragonManager->listAll();

$dragonsArray2 = $dragonManager->add('MonDRagon', 2100, 500);

$dragonManager->delete(13);
*/

//Affiche de nos templates
require_once 'top2.phtml';
require_once $menu.'.phtml';
require_once'bottom.phtml';


