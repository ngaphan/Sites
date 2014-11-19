<?php



$nom=(isset($_POST['nom']));

var_dump ($_POST);




$nom=isset($_POST['nom'])? $_POST['nom']:'' ;

echo $nom  ;

?>