<?php

function get2DArrayFromCsv($file) {

    if (($handle = fopen($file, "r")) !== FALSE)
    {
        $i = 0;

        while (($lineArray = fgetcsv($handle)) !== FALSE)
        {
            for ($j=0; $j<count($lineArray); $j++)
            {
                $data2DArray[$i][$j] = $lineArray[$j];
            }
            $i++;
        }
        fclose($handle);
    }

    return $data2DArray;
}


$wideTab = get2DArrayFromCsv("tasks.csv");

$tabVide = [] ;

for($i=0; $i<count($wideTab) ; $i++)
{
    $newTab= array_push($tabVide ,$wideTab[$i]);

    for( $j =0;$j<count($newTab) ; $j++)
        echo "<br><br>".$newTab[$j] ;
    echo "<br><br><h2 class='urgent'>" .$newTab[3]." </h2>" ;
    echo "<br><br><article><h3>".$newTab[0]."</h3>" ;
    echo "<br><br><span>".$newTab[1]."<span>" ;
    echo "<br><br><p>".$newTab[2]."</p>" ;
}
?>