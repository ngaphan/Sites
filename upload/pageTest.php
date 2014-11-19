// lundi 3/11/2014

// formulaire envoyer un ficher / img ...

<form name ="myForm" action ="" enctype="multipart/form-data" method="post">

    <input name ="myFile" type ="file" ></input>
    <input type ="submit"value ="Envoyer"></input>

</form>


<?php

print_r ($_FILES) ;

mkdir('../allo_pizza_nga/view/img') ;//creer 1 ficher
//rmdir — Removes directory ;
//créer les fichers

//move_uploaded_file ($_FILES["myFile"]["tmp_name"] ,"../allo_pizza_nga/view/img/img1" ) ;
//move_uploaded_file ($_FILES["myFile"]["tmp_name"] ,"leNomJeVeux" ) ;


// supprimer le ficher.
// Le chemin pour aller supp un ficher doit
// etre le meme de lors de la création d'un ficher"

//unlink('../hello/leNomJeVeux') ;
//unlink('leNomJeVeux') ;


// function : bool file_exists ( string $filename )
// Checks whether a file or directory exists.
// filename = Path to the file or directory.

if(file_exists ('leNomJeVeux'))
{
    echo "file exists." ;
}
else
{
    echo "file doesn't exist ." ;
}
if(file_exists ('../hello/leNomJeVeux'))
{
    echo "file exists." ;
}
else
{
    echo "file doesn't exist ." ;
}

?>