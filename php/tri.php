<?php

$fruitsArr = array (
"oranges"=>2.3,
"poire"=>1.9,
"peche"=>3.2
);

var_dump($fruitsArr);echo '<br>','<br>';
print_r($fruitsArr);echo '<br>','<br>';


$newFruitsArr=array_keys($fruitsArr);



/*
 créer 1 newtab qui contient la totalité de l'ancien tab mais il va nous ajouter les indices numériques(0,1..) comme 1 tab d'habitude pour qu'on puisse faire les boucles for(i=0;i....). Parce que le tableau $fruitsArr qu'on a crée, on a remplacé les indices numériques par les noms : orange,poire....Donc les orange, poire sont les indices.

une fois qu'on fait array_keys , orange devient les valeurs du tableau , donc si on parcourt la tab de l'indice 0,1,2 .. ça va affichier :orange=>2.3

Donc on récupère en meme temps le nom de la clé et sa valeur.

*/


for($i=0;$i<count($newFruitsArr);$i++)
{
        echo $newFruitsArr[$i],'<br>','<br>';
}



print_r($fruitsArr);//vérifier si la tab n'a pas d'erreur

echo '<br>','<br>';

// parcourir la tab , récupère les indice ainsi que ses valeurs

foreach($fruitsArr as $key=>$val)
{
    echo $fruitsArr[$key],'<br>';

}



echo '<br>','<br>';

ksort($fruitsArr);//trier le tableau

foreach($fruitsArr as $key=>$val)
{
    echo "$key=$val,<br>";//affichier de telle manière qu'on a précisé

}

echo '<br>','<br>';

asort($fruitsArr);//trier le tableau par croissant

foreach($fruitsArr as $key=>$val)
{
    echo "$key=$val,<br>";//affichier de telle manière qu'on a précisé

}


echo '<br>','<br>';

array_multisort($fruitsArr);//trier le tableau multi types ,pour tab associative

foreach($fruitsArr as $key=>$val)
{
    echo "$key=$val,<br>";//affichier de telle manière qu'on a précisé

}

// consulter dans php, mot clé sort -> tri du tableau
?>

