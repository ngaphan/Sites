
*****************

'ENVOI DUN FICHER À TRAVERS UN FORMULAIRE

AJOUTER UN CHAMPS PUIS ENVOYER AU SERVEUR AUTOMATIQUEMENT


TRES IMPORTANT :
AJOUTER DANS <FORM......'JAMAIS OUBLIER"
1/ <form ...... enctype="multipart/form-data"> : pour envoyer n'import quel fichier( html, txt , img , .doc

2/ <input type ="file" name="comme on veut pour récupérer ds php par $_POST"

<?php   print_r ($_FILES) ; ?>


<form name ="myForm" action ="" enctype="multipart/form-data" method="post">
    <input name ="myFile" type ="file" ></input>
    <input type ="submit"value ="Envoyer"></input>

</form>

<?php

move_uploaded_file ($_FILES["myFile"]["tmp_name"] ,"leNomJeVeux " ) ;
move_uploaded_file ($_FILES["myFile"]["tmp_name"] ,"../eCommerce/model/leNomJeVeux " ) ;


mkdir — Makes directory
rmdir — Removes directory ;


CSS :

.product-image{
    background-size : cover ;
    background-position : center center ;
    background-color : #ddd ;
}

dans html
if(file_exists(...))
{
    style ="background-image:url('img/pizza1.jpg')"
// cette partie ecrite dans html pr dépaner , mais à tout prix il faut le mettre dans controller, il fo prévoir tous les cas possible dans controller
}


?>

<?php
/*



cote server

Array ( [myFile] =>
                    Array ( [name] => 01_calcul.js
                            [type] => application/javascript
                            [tmp_name] => /tmp/php13ilfN
                            [error] => 0
                            [size] => 52
                        )
       )



1er[] = le name de <input> (devient les indices ds table $_FILES)
2e[] = le name fichier (devient les indices ds table $_FILES)
[type] => application/javascript
[tmp_name] => /tmp/php13ilfN
[error] = en cas d'erreur ,envoyer code d'eeuer
[size] = [size] de ficher
*
 *
 *

La funcion permet de déplacer le ficher au serveur

bool move_uploaded_file ( string $filename , string $destination )
move_uploaded_file ($_FILES["name dans <input>"]["tmp_name"] ," leNomJeveux ou leNomJeveux et le chemin relatif (ou absolute) vers l'endroit où on veut enregistrer"
 *
 * si je donne que "leNomJeveux" il va l'enregistrer là où je suis en train de travailler(à * * cote du ficher que lance sur internet)
 * si le veux qu'il enregistre dans le ficher que je veux, il faut lui donner le chemin complet
 * d'abord il faut mettre les 2 point(..) pour quil sort de son endroit actuel , puis (/) et le répertoir voulu , puis / leNomJeveux
*
 * ex1 : move_uploaded_file ($_FILES["myFile"]["tmp_name"] ,"leNomJeVeux " ) ;
 * ex2 : move_uploaded_file ($_FILES["myFile"]["tmp_name"] ,"../model/leNomJeVeux " ) ;
 * /




?>