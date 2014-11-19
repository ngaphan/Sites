<?php

//On démarre la session
session_start();

//On se connecte à MySQL

$myconnect1= new mysqli("localhost" ,"3wa", "troiswa","library");

if($myconnect1->connect_errno)
{
    echo " Erreur : "
        . $myconnect1->connect_errno
        . $myconnect1->connect_err ;
}

else {

    require_once 'vue.phtml' ;
    require_once 'control.php';

}

?>

