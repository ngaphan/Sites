<?php



include"header.php";

if(isset($_GET["menu"])===false ||$_GET["menu"]==="accueil")

{
    include"accueil.php";// on peut écrire  include("accueil.php")
}

elseif($_GET["menu"]==="portfolio")
{
    include"portfolio.php";
}

elseif($_GET["menu"]==="contact")
{
    require"contact.php";
}

include"footer.php";





?>

