

COOKIES

Lancer le jeu

-> Inspecteur -> resources -> cookies > localhost >PHPSESSID value=ml0dh83oufcnuacta16kmo5j71

DANS index.php
après session_start() ;

echo session_id() ;
// resultat doit etre exactement que PHPSESSID = ml0dh83oufcnuacta16kmo5j71


echo $_COOKIE["PHPSESSID"] ;

$value = " hi !" ;

$cookie = setcookie("cookieTest3" ,$value , time()+100 ,"/") ;

$cookie = setcookie("cookieTest3" ,$value , time() ,"/") ;
// le fait de donner "time()" comme durée de vie du cookie ça veut dire qu'on veut le détruire tout de suite , avant la date d'expération prédéfinie dans létape "setcookie" précédente ( où j'avais donner 30jours de vie)


***************

1 cookie a :
* un nom
* 1 value :
* nom domaine
* date d'expération

fuuction : setcookie() pour créer un cookie


<?php

session_start() ;

echo $_COOKIE["PHPSESSID"] ;

$value = " hi !" ;
$value2 = " Bonjour !" ;


setcookie("cookieTest" ,$value ) ;

$cookie = setcookie("cookieTest2" ,$value , time()+10 ,"/") ;

//$cookie2 = setcookie("cookieTest2" ,$value2 , time()+100 ,"/","https://www.google.fr") ;

echo $cookie."<br>" ;

//echo $cookie2 ;