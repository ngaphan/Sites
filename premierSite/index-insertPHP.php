<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8"/>
</head>

<title> Mon premier site </title>
<link rel="stylesheet" href="index.css"/>
<body>
<header>

    <h1>Mon premier site</h1>

    <nav>
        <ul>
            <li><a href="index.php?menu=accueil">Acceuil</a></li>
            <li><a href="index.php?menu=portfolio">Portfolio</a></li>
            <li><a href="index.php?menu=contact">Contact</a></li>
        </ul>
    </nav>

    <hr>

</header>

<section>

<?php

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

  ?>

</section>

<hr>
<footer>
    <p>Tous droits réservés</p>
</footer>


</body>

</html>