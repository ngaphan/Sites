/********************************************************************************/
/************************COURS VENDREDI 17/10/2014 ********************************/
/**********************************************************************************/


192.168.1.99/ShareCode/7si : novelle address sharecode de Ivan

192.168.1.99/ShareCode/ap4 : novelle address 2 sharecode de Ivan


sécurité : injection sql , faille de sécurité

passer un formulaire par post ou get directement sur url n'est pas sécurité
car on peut changer url

/**********************************************************************************/
/***********************************************************************************/

foreach($myArray as $val)

      //je veux que valeur , si on écrit $a/$b.. à la place de $val
      =>par default $a est la valeur (jamais l'indice')

 ou   foreach($myArray as $key=>$val)//je veux indice et valeur



php : racourcis d'écriture "short tag"

/******************* 1 **************************/

            <?php            ?>
égale à :   <?               ?>


/************ 2 *********************************/

            <?php echo $myVar ,$myTab["mykey"] ;?>
égale à :   <?= $myVar ,$myTab["mykey"] ?>

            //pas de (;)
            // (=) remplace  'echo'


*********** 3 ******************************************/

    <?php

      foreach($myArray as $val)
 ou   foreach($myArray as $key=>$val)

      {
      }

    ?>

 <? foreach ($myArray as $val) : ?> // (:) comme accolade ouvrante
 <? endforeach ?> // (endforeach ) comme accolade ouvrante


/**********************  4 ****************************************/


<? foreach ($books as $bookArray) : ?>
    <tr>
        <td><?=$bookArray["book_title"] ?></td>
        <td><?=$bookArray["author_name"] ?></td>
    </tr>
<? endforeach ?>


/*********************les  TEMPLATES **************************************/

les extension suivantes ne sont pas des templates.

.HTML / .HTM : pur html ou htm

.PHP : 100% PHP,

si on ecrit <? sans fermer , c'est OK aussi , donc plus jamais html dedans'

.JS : pur js

.CSS : pur css

seule l'extension : (.phtml) est 1 template :

.phtml : 95% html et 5% php (mélangé)

donc un template est 1 fichier html avec le moindre possible de programmation(php)

ex :

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Library Manager</title>
    <link rel="stylesheet" type="text/css" href="order-form.css">
</head>
<body>
    <section>
        <h1>Library Manag</h1>

        <table class="standard-table">
            <caption>Stock des livres</caption>
            <thead>
                <tr>
                    <th>Référence</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                </tr>
            </thead>
			<tbody>
                <?php foreach($booksArray as $bookArray): ?>
    <tr>
        <td><?= $bookArray['book_id'] ?></td>
        <td><?= $bookArray['book_title'] ?></td>
        <td><?= $bookArray['author_name'] ?></td>
        <td><a href="#">Modifier</a></td>
        <td><a href="#">Supprimer</a></td>
    </tr>
<?php endforeach ?>
</tbody>
</table>

</section>
</body>
</html>





