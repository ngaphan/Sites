<?php

var_dump($_GET)

?>


<br><br>


<?php

var_dump($_GET['word']);

?>

<br><br>


<?php

var_dump($_GET['langage']);

?>


<br><br>

<?php

$arrFrench=array('tchat','chien','mer','soleil');
$arrEnglish=array('cat','dog','sea','sun');

$lang=($_GET['langage']);

$word=($_GET['word']);



if($lang==="frtoen")

    {
        $key=array_search($word,$arrFrench,true);

        echo $key;

        if($key!==false)

        {
             echo  $word , " means " ,  $arrEnglish[$key] ;
        }

        else
        {
            echo ' Désolé ' , $word , ' n\'existe pas !!!' ;
        }


    }


else
{
    //faut redonner ds url le mot en anglais et entofr
    //pr rafraichir l'url -> faut mettre le curseur dans l'url puis "Entrée"

    $key=array_search($word,$arrEnglish,true);

    echo $key;

    if($key!==false)

    {
        echo  $word , " means " ,  $arrFrench[$key] ;
    }

    else

    {
        echo  $word , ' n\'est pas dans la liste !!!' ;
    }

}


?>



//EX _OK