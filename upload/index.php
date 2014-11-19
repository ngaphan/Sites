
<form name ="myForm" action ="" enctype="multipart/form-data" method="post">
    <input name ="myFile" type ="file" ></input>
    <input type ="submit"value ="Envoyer"></input>

</form>


<?php

print_r ($_FILES) ;
// cette ligne nous aide à savoir des infos de de la table récupérée
// pour pouvoir donner le nom de ficher lors de "upload"

mkdir('../allo_pizza_nga/view/img') ;//creer 1 dossier



if(file_exists ('../allo_pizza_nga/view/img'))
{
    echo "dossier exists." ;

    move_uploaded_file ($_FILES["myFile"]["tmp_name"] ,"../allo_pizza_nga/view/img/". $_FILES["myFile"]["name"]) ;
}
else
{
    echo " dossier doesn't exist ." ;
}

?>