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

    require_once('modelSV.phtml') ;

    if(isset($_GET['action'])===true && $_GET['action']==="del")
    {
        delete($_GET["bookIndex"]) ;
    }

    if(isset($_POST['action'])===true && $_POST['action']==="add")
    {

        add($_POST["title"] , $_POST["author"]) ;
    }

    if(isset($_GET['action'])===true && $_GET['action']==="modif")
    {

        modify($_GET["bookIndex"]) ;
        require_once'home.php' ;
        update($_POST["title"] , $_POST["authorName"]) ;
    }

    if(isset($_POST['action'])===true && $_POST['action']==="update")
    {
        update($_GET["bookIndex"]) ;
    }

?>

