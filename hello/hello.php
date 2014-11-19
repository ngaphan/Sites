<?php

/*

    //cré un fichier txt si ça n'existe pas

    $handle1 = fopen ("hello1.txt","a+");

    fwrite($handle1 , "bonjour\n");

    fwrite($handle1 , "say hello\n");

    fclose($handle1);


*/


$handle1 = fopen ("hello1.txt","r");//ouvrir mode lecture seul ,

$content = fread ( $handle1, filesize("hello1.txt"));

//  lire fichier
//  filesize comme length
//  lire le fichier jusqu'à la fin du ficher

echo $content ;

fclose($handle1);

$content= "avant" .$content . "après" ;

$handle1 = fopen ("hello1.txt","w"); //effacer puis réécrire nouveau content

fwrite($handle1,$content);

fclose($handle1);





/*
 *  effacer le contenu du fichier text

    $handle1 = fopen ("hello1.txt","a+");
    $effacer = ftruncate($handle1,0);

    fclose($handle1);
*/







