<?php
/*
************************************************************************************

Le contrôleur

Nous allons commencer par le contrôleur, et vous allez comprendre pourquoi. Quand vous demanderez un fichier dans votre
barre d'adresse, ce sera en fait le contrôleur que vous appellerez. C'est le fichier qui contient toute la logique du code. Vous
commencerez généralement par y inclure votre modèle (nous verrons plus loin de quoi il s'agit). Vous procéderez à quelques
vérifications d'ordre général (comme les autorisations), puis vous pourrez appeler des fonctions avant d'inclure la vue.


*******************************************************************************
*/
?>

<?php

    require_once('model.phtml');


    if(isset($_GET['action'])===true && $_GET['action']==="del")
    {
        delete() ;
    }

    if(isset($_POST['action'])===true && $_POST['action']==="add")
    {

        add() ;
    }

    if(isset($_GET['action'])===true && $_GET['action']==="modif")
    {
        modify() ;
    }

    if(isset($_POST['action'])===true && $_POST['action']==="update")
    {
        update() ;
    }

?>

