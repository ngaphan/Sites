<?php

    function saveTofile ($filePath , $dataTasksArray)
    {
        $handle = fopen($filePath, 'a+');
        //$handle : le pointeur , a+ : pointor à la fin du fichier


        fputcsv($handle,$dataTasksArray );

        // $handle = où je doit commencer à écrire et dans quel fichier
        // $dataTasksArray = écrire moi $dataTasksArray ds $filePath(qui= "tasks.csv")
        // ça va tranformer tous en 1 ligne car csv est 1 tableau en ligne !
        // csv est compréhensible par  excel

        fclose($handle);
        // eviter des surcharge du cache , fermer le fichier à enregistrer car
        // j'ai dejà enregistré ds le fichier indiqué

    }

?>



<?php

// A simple function to return 2 Dimensional array by parsing a CSV file.
// c'est un grand tableau des taches , qui contient les petit tableaux détaillé
// de chaque tache comme suit :
/*
 * Array
 * (
     * [0] => Array ( [0] => courses [1] => oranges [2] => 22/10/14 [3] => Today )
     * [1] => Array ( [0] => courses [1] => oranges [2] => 22/10/14 [3] => Today )
     * [2] => Array ( [0] => class [1] => ivan [2] => 10/10/014 [3] => Urgent )
     * [3] => Array ( [0] => integ [1] => lautent [2] => 20 [3] => Tomorrow )
 *  )
 */


function get2DArrayFromCsv($file) {

    if (($handle = fopen($file, "r")) !== FALSE)
    {
        $i = 0;

        while (($lineArray = fgetcsv($handle)) !== FALSE)
        // lire line par line
        // false = il arrive à la fin du fichier
        // controler les erreur dans l'instruction écrite par nous meme
        // pour voir si PHP est OK av notre instruction , C exécutable ou pas
        {
            for ($j=0; $j < count($lineArray); $j++)
            {
                $data2DArray[$i][$j] = $lineArray[$j];
            }
            $i++;
        }

        fclose($handle);

    }

    return $data2DArray;

    //print_r($data2DArray) ;
}

?>



















