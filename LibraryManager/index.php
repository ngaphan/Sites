<?php

// MySQLi : $mysqliObject = new mysqli("localhost", "3wa", "troiswa", "library");
// MySQLi : $PDOObject->set_charset("utf8");
$PDOObject = new PDO("mysql:host=localhost;dbname=library;charset=UTF8", "3wa", "troiswa");

require_once 'actions.php';

require_once 'home.phtml';
