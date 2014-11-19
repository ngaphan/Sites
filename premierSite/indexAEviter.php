<?php

    /* façon racourci du code mais jamais le faire car c'est très dangereux
     * c'est la faille de PHP'
     */

    include"header.php";

        if(isset($_GET["menu"])===false )

        {
           $_GET["menu"]="accueil";//donner chaine de caractère
        }


        include $_GET["menu"];

/*

 *  $_GET : est 1 variable tableau,  car qui récupère plusiers values. "menu" est le  *   nom de variable au quel on vient de donner 1 valeur qui est = "accueil"
 *   Donc php va chercher et afficher la page "accueil"
 */

 /* Explication :

 tres dangereux , tres sensible car $_GET va prendre tous ce qu'on ecrit dans la barre d'address, donc on peut donner le chemin qui rentre
dans notre server pr picker nos finfo

-> Donc interdit de faire la concaténation une varible dans include$_Get["varible"]
car la varible dépend/attend ce que l'utilisateur donne , donc il va nous donner le chemin quil veut pour pénétrer ds notre serveur OU simplement qu'il inclure 1 script d'alert qui fait peur aux gens , ect.....

 include est 1 fonction , faut avoir param

*/

    include"footer.php";



?>


