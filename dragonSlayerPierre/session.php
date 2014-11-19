<?php


session_start();
// echo("avant : " . session_id())  ;
//  $_SESSION["message"] = "BONSOIR" ;


$_SESSION['selectedDragon'] = 'Dragon';
$_SESSION['selectedCharacter'] = 'Character' ;
echo 'avant : ' . $_SESSION['selectedDragon']  ;
echo 'avant : ' . $_SESSION['selectedCharacter']  ;
unset($_SESSION)  ;
echo 'apres : ' . $_SESSION['selectedDragon']  ;
echo 'apres : ' . $_SESSION['selectedCharacter']  ;


// session_destroy();
// echo("après : " . session_id())  ;
// print_r($_SESSION) ;
