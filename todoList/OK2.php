Faire une page html à part , nommé = maj.html

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title> Mon premier site </title>
    <link rel="stylesheet" href="formul.css"/>
</head>

<body>
<a href="test2.php?action=maj"> MAJ </a>
<!--test2.php est le nom du fichier php qui est à la meme racine que maj.html ds www
sinone veiller à indiquer le chemin vers test2.php-->

</body>

</html>



Dans le fichier test2.php à part dans www

<?php

if(isset($_GET['action'])===false || $_GET['action']==="maj")
{
    $myconnect1= new mysqli("localhost" ,"3wa", "troiswa","library");

    if($myconnect1->connect_errno)
    {
        echo " Erreur : "
            . $myconnect1->connect_errno
            . $myconnect1->connect_err ;
    }

    else
    {
        if (
            (
            $recup = $myconnect1->qu<?php

    if(isset($_GET['action'])===false || $_GET['action']==="maj")
    {
        $myconnect1= new mysqli("localhost" ,"3wa", "troiswa","library");

        if($myconnect1->connect_errno)
        {
            echo " Erreur : "
                 . $myconnect1->connect_errno
                 . $myconnect1->connect_err ;
        }

        else
        {
            if (
                (
                    $recup = $myconnect1->query('SELECT book_title  FROM books WHERE
                                                        author_name="Dumas"')
                ) == true
              )
            {
                echo " LA requete est OK !";
                if($recup!==0)
                {
                    print_r ($recup->fetch_array()) ;

                    $myconnect1->query('
                                    UPDATE books
                                    SET book_title = "Les Trois Mousquetaires"
                                    WHERE book_title = "Le comte de Monte Cristo"
                                ');
                }
            }

            else
            {
                echo "Erreur !";
            }
        }
    }
?>

ery('SELECT book_title  FROM books WHERE
                                                        author_name="Dumas"')
            ) == true
        )
        {
            echo " LA requete est OK !";
            if($recup!==0)
            {
                print_r ($recup->fetch_array()) ;

                $myconnect1->query('
                                    UPDATE books
                                    SET book_title = "Les Trois Mousquetaires"
                                    WHERE book_title = "Le comte de Monte Cristo"
                                ');                }
        }

        else
        {
            echo "Erreur !";
        }
    }
}
?>

