<?php


session_start() ;

echo session_id() ;

$_SESSION["message"]="bonjour" ;
// cet etap ,il écrit "bonjour" dans $_SESSION["message"]
//essaie de mettre cet étap en commentaire, puis ecrire le echo suivant

echo $_SESSION["message"] ;
// ça va afficher "bonjour"

$_SESSION= [] ;// pr bien détruire

session_destroy() ;

echo $_SESSION["message"] ;// le tableau s'affiche pas après destroy

donc por bien detruire la session, avant le session_destroy , mettre le tableau à 0

$_SESSION= [] ;




