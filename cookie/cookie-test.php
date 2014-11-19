<?php
session_start() ;

echo $_COOKIE["PHPSESSID"] ;

$value = " hi !" ;


setcookie("cookieTest" ,$value ) ;

$cookie = setcookie("cookieTest" ,$value , time()+10 ,"/") ;

// "/" = localhost si on est deja sur loclahost

echo $cookie ;