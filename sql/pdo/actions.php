<?php

$PDOObject = new PDO("mysql:host=localhost;dbname=library;charset=UTF8", "3wa", "troiswa");

          /* if(isset($_GET['action'])===true && $_GET['action']==="del")
            {
                $requete = 'DELETE FROM books WHERE book_id ='.$_GET['bookIndex'] ;

                //echo $requete ;
                // ça doit afficher la requete exactement qu'il faut faire dans sql
                // si c'est pas le cas , voir les concaténation et les guillemets

                if( $myconnect1->query($requete))
                {
                   echo " LA requete de suppression est OK !";
                }
            }*/

        if(isset($_POST['action'])===true && $_POST['action']==="add")
        {
            $query = 'INSERT INTO books (book_title , author_name) VALUES(:var1,                            :var2)' ;
            $linkValueAuSQL = [

                "var1" => $_POST["bookTitle"],
                "var2" => $_POST["authorName"]
            ];
            $PDOstatementObj = $PDOObj->prepare($query) ;
            $PDOstatementObj->execute($linkValueAuSQL) ;
            $PDOstatementObj ->fetch();
        }

       /* if(isset($_GET['action'])===true && $_GET['action']==="modif")
        {
            //echo $_GET["bookIndex"] ;

            $requete ='SELECT * FROM books
                       WHERE book_id=' .$_GET["bookIndex"];

            $recupsArray = $myconnect1->query($requete) ;// query donne retourne 1Arr

             $lineArray =  $recupsArray->fetch_array() ;//récup line par line

            //print_r( $lineArray );

            $bookTitle = $lineArray[1] ;// j'ai besoin que book_title
            $authorName = $lineArray[2] ;// j'ai besoin que author_name

            //echo $bookTitle ;
            //echo $authorName ;
        }

        if(isset($_POST['action'])===true && $_POST['action']==="update")

        {    $requeteMAJ = 'UPDATE books
                            SET
                                book_title = "'.$_POST["title"].'" ,
                                author_name= "'.$_POST["authorName"].'"
                            WHERE
                                book_title = "'.$bookTitle.'"
                                AND author_name = "'. $authorName.'"';

            // echo  $requeteMAJ ;

            $myconnect1->query($requeteMAJ) ;

        }*/

?>

