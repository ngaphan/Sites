<?php

    $mysqli = new mysqli("localhost" , "3wa" , "troiswa" , "library");
    //cré une connexion au serveur et sql

    if( $mysqli -> connect_errno)
        // verifier sil y a pas d'eror de connexion

    {
        echo " probleme de connection : "
            . $mysqli->connect_errno." "
            . $mysqli->connect_err ;

        // $mysqli->connect_errno." " = affichier te le type d'erreur
        // $mysqli->connect_err  =  affichier te l'erreur
    }

    else
    {
        echo " Bienvenue " ;
    }

/*  faire moi ceci : rien récupérer pr l'instant

    $mysqli ->query("SELECT * FROM books ORDER BY book_title");//ligne des instruction
    print_r($mysqli) ;

*/


    if($recup = $mysqli->query("SELECT * FROM books ORDER BY book_title"))
    // query pr accéder au BD
    //vérofier erreur connexion

    {
        echo "<br> J'ai trouvé la BD ! <br> " ;

        //print_r($mysqli) ;
        //print_r($recup) ;
       // print_r($recup -> fetch_array());

        /* resultat : est 1 Obj ,

        affiche la 1ère fois l'indice en chiffre , 2èfois en nom de la colone
        Array (
                [0] => 3 [book_id] => 3
                [1] => Asterix à la 3WA [book_title] => Asterix à la 3WA
                [2] => Goscinny [author_name] => Goscinny
        )*/

       while ($line = $recup -> fetch_array())
        {
            print_r($line) ;
            echo "<br><br>" ;

            /* result de 4 tabs: (affichier les codes sources pr mieux voir
             * [0] => 3
             * [book_id] => 3
             * [1] => Asterix à la 3WA
             * [book_title] => Asterix à la 3WA
             * [2] => Goscinny
             * [author_name] => Goscinny
             * etc
             */
        }
    }

    else
    {
      echo $mysqli -> error  ;
    }




/* code d'Ivan

if ($mysqli = new mysqli("localhost", "3wa", "troiswa", "library"))
{
    if ($result = $mysqli->query("SELECT * FROM books"))
    {
        print_r($result);
        print_r($result->fetch_array());
        print_r($result);
        print_r($result->fetch_array());
        print_r($result);
        print_r($result->fetch_array());
        print_r($result);
        print_r($result->fetch_array());
        print_r($result);
    }
}
else
{
    echo $mysqli->connect_errno . ': ' . $mysqli->connect_error();
}

<?php

	if ($mysqli = new mysqli("localhost", "3wa", "troiswa", "library"))
	{
		if ($result = $mysqli->query("SELECT * FROM books"))
		{
			echo '<table>' . "\n"
				. '	<tr>' . "\n"
				. '		<td>ID</td>' . "\n"
				. '		<td>Titre</td>' . "\n"
				. '		<td>Auteur</td>' . "\n"
				. '	</tr>' . "\n";

			while ($row = $result->fetch_array())
			{
				echo '	<tr>' . "\n"
					. '		<td>' . $row[0] . '</td>' . "\n"
					. '		<td>' . $row[1] . '</td>' . "\n"
					. '		<td>' . $row[2] . '</td>' . "\n"
					. '	</tr>' . "\n";
			}

			echo '</table>';
		}
	}
	else
	{
		echo $my
sqli->connect_errno . ': ' . $mysqli->connect_error();
	}
?>




*/


if($mysqli = new mysqli("localhost" , "3wa" , "troiswa" ,"library"))
{
    if($recup2 = $mysql->query("SELECT * FROM authors"))
    {
        print_r($recup2) ;//vide
        echo "<br>" ;
        print_r($recup2->fetch_array()) ;//vide
        echo "<br>" ;
        print_r($recup2) ;//vide
        echo "<br>" ;
        print_r($recup2->fetch_array()) ;//vide
        echo "<br>" ;
        print_r($recup2) ;//vide
        echo "<br>" ;
        print_r($recup2->fetch_array()) ;//vide
        echo "<br>" ;
    }
}

?>

