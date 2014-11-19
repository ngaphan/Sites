<?php
/*
    class Voiture
    {
        public $color ;
        private $_vitesse ;
    }

    $voitureDePierre = new Voiture() ;
    $voitureDePierre->color="blue" ;
    echo $voitureDePierre->color ;
*/
?>


<?php

    header('Content-Type: text/html; charset=UTF-8');//eviter erreur d'accent
    class Voiture
    {

        private $_color ;
        private $_vitesse ;
        private $_vitesseMax ;

        public function __construct()
        {
            echo 'Le consstructeur(la méthode__construct()) est appelée
                    automaiquement.';
            //chaque fois on crée 1 obj , cette phrase va affichier
            // car il fait automatic lors de la création 1 class
        }
        public function __destruct()
        {
            echo 'Le destructeur (la méthode __destruct()) est appelé
            automatiquement.<br>';
        }

        // getter
        // assesseur

        public function getVitesse()
        {
            return $this->_vitesse;
        }
        public function get

        // s'appelle ="setter/ mutateur"
        // la fonction permet de modifier / définir 1 propriété,
        // son travail est de vérifier si 1 variable reçue est validé

        public function definirVitesse($vit)
        {
            if(is_int($vit))
            {
                $this->_vitesse = $vit ;
            }
            else
            {
                echo ' La viesse n\'est pas valable ';
            }
        }
    }

    $voitureDePierre = new Voiture() ;
    $voitureDePierre->definirVitesse(60) ;

   /* $voitureDeRomain = new Voiture() ;
    $voitureDeRomain->definirVitesse(100) ;*/

echo
    '<br> La vitesse de la voitire de Pierre est de : '.$voitureDePierre->getVitesse().'km/h <br>'
    /*.'<br> Et la vitesse de la voiture de Romain est de :'.$voitureDeRomain->getVitesse().'km/h' ;*/

?>

