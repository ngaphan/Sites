<?php

// D:/Websites/Cours/Namespaces/index.php

require_once 'vendor/OneLibrary/AmazingClass.php';
require_once 'vendor/AnotherLibrary/AmazingClass.php';

use OneLibrary\AmazingClass;
use OneLibrary\PDO;
// use AnotherLibrary;

$myObject = new AmazingClass();

// ou directement :

$myObject = new PDO();
//$myObject = new OneLibrary\PDO();
