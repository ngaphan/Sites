<?php

/*  :var1 => qui attend 1 variable de l'éxtérieur' */

$query = 'INSERT INTO books (book_title , author_name) VALUES(:var1,:var2)' ;
$query2 = 'select * from books' ;

$linkValueAuSQL = [

    "var1" => $_POST["bookTitle"],
    "var2" => $_POST["authorName"]
];

// prepare ma requete

$PDOstatementObj = $PDOObj->prepare($query) ;
$PDOstatementObj2 = $PDOObj->prepare($query2) ;

// faire le lien entre les var1 var2 av les $_post en exécutant la requete

$PDOstatementObj->execute($linkValueAuSQL) ;
//$PDOstatementObj->execute($linkValueAuSQL) ;

// récuperer ou voir ce qu'on vient d'insérer

$PDOstatementObj ->fetch(); // ligne à ligne
$PDOstatementObj2 ->fetchAll(); // tout le tableau

?>