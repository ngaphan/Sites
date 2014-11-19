



is_int : verifie c'est un entier

$this : est 1 obj, jappelle 1 obj

voir : convention PEAR , écrire les variable

//faut désormais mettre en private ts les proriétés ,car il devront passer par l'&tapte de vérifiacation si c'est valable .

EX : $voitureDePierre->color="bienvenue" n'est pas valable -> ça va planter tout

Si on mest en private -> il faut passer la fonction de vérification


Noms de méthodes réservées : méthode magiques

__construct() : méthode est appelée automatiquement au moment d'instanciation d"une class (= création d'un obj àaprtir d"une class).ELlle est presque tout le temps public


__destruct() : méthode est  appelée automatiquement à la destruction de la class (= fin de l'utilisation de l'objet)

<?php

?>
// code d'ivan

<?php

    class Car.ELlle est presque tout le temps public
    {
        public $color;
        private $_speed;

        // Anglais : Getter
        // Français : Assesseur
        // Sert à retourner la valeur de la propriété privée
        // de l'objet sélectionnéen dehors d'une classe
        public function getSpeed()
        {
            return $this->_speed;
        }

        // Anglais : Setter
        // Français : Mutateur
        // Sert à définir la valeur de la propriété privée
        // de l'objet sélectionné
        public function setSpeed($speed2)
        {
            if (is_int($speed2))
            {
                $this->_speed = $speed2;
            }
            else
            {
                echo 'Cette vitesse n\'est pas conforme';
            }
        }
    }

    $pierreCar = new Car();
    $pierreCar->setSpeed(60);
    $romainCar = new Car();
    $romainCar->setSpeed(50);

    echo 'La vitesse de la voiture de Pierre est de ' . $pierreCar->getSpeed() . ' km/h.';


?>

// ivan 2
<?php

header('Content-Type: text/html; charset=UTF-8');

class Car
{
    private $_color;
    private $_speed;
    private $_speedMax;

    // Constructor
    public function __construct()
    {
        echo 'Le contructeur (la méthode __construct()) est appelé automatiquement.<br>';
    }

    // Getter : $_color
    public function getColor()
    {
        return $this->_color;
    }

    // Getter : $_speed
    public function getSpeed()
    {
        return $this->_speed;
    }

    // Getter : $_speedMax
    public function getSpeedMax()
    {
        return $this->_speedMax;
    }

    // Setter : $_color
    public function setColor($color2)
    {
        $this->_color = $color2;
    }

    // Setter : $_speed
    public function setSpeed($speed2)
    {
        if (is_int($speed2))
        {
            $this->_speed = $speed2;
        }
        else
        {
            echo 'Cette vitesse n\'est pas conforme<br>';
        }
    }

    // Setter : $_speedMax
    public function setSpeedMax($speedMax2)
    {
        if (is_int($speedMax2))
        {
            $this->_speedMax = $speedMax2;
        }
        else
        {
            echo 'Cette vitesse maximum n\'est pas conforme<br>';
        }
    }

}

// ivan 3

<?php

header('Content-Type: text/html; charset=UTF-8');

class Car
{
    private $_color;
    private $_speed;
    private $_speedMax;

    // Constructor
    // pas obligatoire , mais le but est de visualiser ce qu'on est en train de
    // construire , pour y penser à vérifier les propriété éventuelles
    public function __construct($color3, $speed3, $speedMax3)
    {
        $this->setColor($color3);
        $this->setSpeed($speed3);
        $this->setSpeedMax($speedMax3);
    }

    // Getter : $_color
    public function getColor()
    {
        return $this->_color;
    }

    // Getter : $_speed
    public function getSpeed()
    {
        return $this->_speed;
    }

    // Getter : $_speedMax
    public function getSpeedMax()
    {
        return $this->_speedMax;
    }

    // Setter : $_color
    public function setColor($color2)
    {
        $this->_color = $color2;
    }

    // Setter : $_speed
    public function setSpeed($speed2)
    {
        if (is_int($speed2))
        {
            $this->_speed = $speed2;
        }
        else
        {
            echo 'Cette vitesse n\'est pas conforme<br>';
        }
    }

    // Setter : $_speedMax
    public function setSpeedMax($speedMax2)
    {
        if (is_int($speedMax2))
        {
            $this->_speedMax = $speedMax2;
        }
        else
        {
            echo 'Cette vitesse maximum n\'est pas conforme<br>';
        }
    }

}

$anneCar = new Car('blue', 0, 240);
echo $anneCar->getColor();
$fabienCar = new Car();
// function  construct défini en haut , il y a 3 params ,
//si on ne donne pas 3 params ici lors de la création new Car,ça envoir bcp d'error
echo $fabienCar->getColor();

********************************

paramethres optionnels -> donner 1 valuer par default;

EX :

le fait de metre ="" ça rend la variable optionnel
red est par default ;
la variable $paramOptionel est optionnel

function myFunction($paramReçuObligatoire, $paramOptionel="red")



*********************************************************

// ivan 4


<?php

header('Content-Type: text/html; charset=UTF-8');

class Car
{
    private $_color;
    private $_speed;
    private $_speedMax;

    // Constructor
    // ds ce cas , les param de construct sont par default, il aura pas d'error
    // si on donne pas les param lors de l'appel car il va utiliser les valeurs
    // par default
    public function __construct($color3 = 'black', $speed3 = 0, $speedMax3 = 200)
    {
        $this->setColor($color3);
        $this->setSpeed($speed3);
        $this->setSpeedMax($speedMax3);
    }

    // Getter : $_color
    public function getColor()
    {
        return $this->_color;
    }

    // Getter : $_speed
    public function getSpeed()
    {
        return $this->_speed;
    }

    // Getter : $_speedMax
    public function getSpeedMax()
    {
        return $this->_speedMax;
    }

    // Setter : $_color
    public function setColor($color2)
    {
        $this->_color = $color2;
    }

    // Setter : $_speed
    public function setSpeed($speed2)
    {
        if (is_int($speed2))
        {
            $this->_speed = $speed2;
        }
        else
        {
            echo 'Cette vitesse n\'est pas conforme<br>';
        }
    }

    // Setter : $_speedMax
    public function setSpeedMax($speedMax2)
    {
        if (is_int($speedMax2))
        {
            $this->_speedMax = $speedMax2;
        }
        else
        {
            echo 'Cette vitesse maximum n\'est pas conforme<br>';
        }
    }

}

$anneCar = new Car('blue', 0, 240);
echo $anneCar->getColor();
$fabienCar = new Car();
echo $fabienCar->getColor();


///*****************************************************************************/
/*////////////////////////// HERITAGE ////////////////////////////////////////**/
/********************************************************************************/

DANS PROGRAMMATION

COMMENCE TJ PAR     le plus gros vers plus petit , plus openssl_pkey_get_details(
    EX :

monde > être vivant > animaux > poissons > poisson rouge

vehicles > truck
)


<?php

header('Content-Type: text/html; charset=UTF-8');

class Vehicle
{
    public $speed;

    public function __construct()
    {
        $this->speed = 50;
    }

    public function turn()
    {
        echo "Je sais tourner !<br>";
    }
}

class Car extends Vehicle
{
    public function __construct()
    {
        //$this->turn();
        $this->speed=40;
    }
}

$anneVehicle = new Vehicle();
echo $anneVehicle->speed . ' km/h.<br>';
$anneVehicle->turn();

$anneCar = new Car();
/*echo $anneCar->speed . ' km/h.<br>';
$anneCar->turn();*/



/*********************/

ENCAPSULATION

public : accesible à partir de n\'import où ( autant modifier que ajouter / suprimer)'

private : accesible seulement   au sein de la meme classe

protected : eccessible seulement au sein de la meme classe et de fille  et de ces classes héritées (classes filles)


LA SURCHARGE

