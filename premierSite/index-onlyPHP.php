<?php


    include"header.php";

        if(isset($_GET["menu"])===false ||$_GET["menu"]==="accueil")

        {
            include"accueil.php";
        }

        elseif($_GET["menu"]==="portfolio")
        {
            include"portfolio.php";
        }

        elseif($_GET["menu"]==="contact")
        {
            include"contact.php";
        }

    include"footer.php";

  ?>

