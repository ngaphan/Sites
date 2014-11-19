<?php

    $PDOObject = new PDO("mysql:host=localhost;dbname=library;charset=UTF8", "3wa", "troiswa");


        $query = 'INSERT INTO books (book_title , author_name) VALUES(:var1,:var2)' ;
        $linkValueAuSQL = [

            "var1" => "salut",
            "var2" => "moimeme"
        ];

        $PDOstatementObj = $PDOObj->prepare($query) ;

        $PDOstatementObj->execute($linkValueAuSQL) ;

        $PDOstatementObj ->fetch();


?>

