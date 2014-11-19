
INCLURE UN AUTRE FICHIER DANS LE FICHER COURANT :

include :

si fichier n'esiste pas , mais ça continue à traiter le rest,continu l'exécution

include-once :

si fichier n'esiste pas , continu l'exécution , et si le fichier existe ça include
1seule fois

require :

si fichier n'esiste pas , s'arret tout affichier erreur fatal

require-one :

si fichier n'esiste pas , s'arret tout erreur fatal, et si le fichier existe ça include 1seule fois
pas le 2 fois, mais afficher pas d'erreur


**************


click sur enregistrer du formulaire
ds PHP , grace à la variable global $_POST on va recevoir 1 tableau récap ts ce qe l'utilisateur tapé, php cré automaticment 1 tableau

$_POST=[
    "name"=>

]


print-r($_POST); pr voir ce quil récupère


fopen
fread
filesize
fclose

***************************

/* à consulter

**********************************

fputcsv() : coma separated values : comme formulaire


<?php

$list = array (
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);

$fp = fopen('file.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
?>

The above example will write the following to file.csv:

aaa,bbb,ccc,dddd
123,456,789
"""aaa""","""bbb"""

**********************

fgetcsv()



<?php
$row = 1;
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
?>

******************

array_push()csv :


<?php
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
?>

The above example will output:

Array
(
[0] => orange
[1] => banana
[2] => apple
[3] => raspberry
)

