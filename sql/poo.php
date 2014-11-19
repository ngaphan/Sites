<?php

    // crée 1 class commun , son nom commence par Majuscule

    class Voiture
    {
        public $couleur ;// déclarer le propriété commune, puis sort des accolades
        private $vitesse ;

    }

    $voitureDePierre = new Voiture() ;//cré nouvel voiture à partir du model Voiture
    // créer 1 nouvel objet $voitureDePierre
    // new Voiture():instanciation d'une classe , Voiture est la  class qu'on a crée
    $voitureDeRomain = new Voiture() ;
    $voitureDeNga = new Voiture() ;


    $voitureDePierre->coleur="blue" ;// pas de $avant couleur ( c'est une proriété)
    $voitureDeRomain->couleur="gray";
    $voitureDeNga->couleur="red";
    $voitureDeNga->vitesse=200;

   /* Fatal error: Cannot access private property Voiture::$vitesse in /home/wap41/sites/sql/poo.php on line 22 */


    echo $voitureDePierre->coleur ;
    echo $voitureDeNga->vitesse ;


class Maison
{
    public $fenetre ;// déclarer le propriété commune, puis sort des accolades
}


$maisonDeNga = new Maison ();
$maisonDePierre = new Maison ();

$maisonDeNga->fenetre=4 ;
$maisonDePierre->fenetre=6 ;


echo $maisonDeNga->fenetre .$maisonDePierre->fenetre=6 ;
?>