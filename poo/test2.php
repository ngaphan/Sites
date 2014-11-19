<?php/*
header('content-type:text/html ; charset=UTF-8');

class Vehicle
{
    public $speed ;
    public  function __construct()
    {
        $this->speed=50 ;
    }
    public  function turn()
    {
        echo " je sais tourner !";
    }
}


class Car extends Vehicle
{
    // si on laisse vide, ça hérite tout de sa mère , sinon on peut redéfinir :
    public  function __construct()
    {
        $this->speed=40 ;
    }
}

$anneCar = new Car();
echo $anneCar->speed . ' km/h.<br>';
$anneCar->turn();
*/
?>

<?php
/*
header('Content-Type: text/html; charset=UTF-8');

class Vehicle
{
    public $color;
    private $_speed;

    public function __construct()
    {
        $this->color = "red";
        $this->_speed = 50;
    }

    public function turn()
    {
        echo "Je sais tourner !<br>";
    }
}

class Car extends Vehicle
{
    public function getColor()
    {
        return $this->color;
    }

    public function getSpeed()
    {
        return $this->_speed;
    }
}

$anneCar = new Car();
echo 'Couleur: ' . $anneCar->getColor() . '.<br>';
echo $anneCar->getSpeed() . ' km/h.<br>';
$anneCar->turn();
*/
?>

<?php

/*

header('Content-Type: text/html; charset=UTF-8');

class Vehicle
{
    public $color;
    protected $speed;

    public function __construct()
    {
        $this->color = "red";
        $this->_speed = 50;
    }

    public function turn()
    {
        echo "Je sais tourner !<br>";
    }
}

class Car extends Vehicle
{
    public function getColor()
    {
        return $this->color;
    }

    public function getSpeed()
    {
        return $this->_speed;
    }
}

$anneCar = new Car();
echo 'Couleur: ' . $anneCar->getColor() . '.<br>';
echo $anneCar->getSpeed() . ' km/h.<br>';
$anneCar->speed=120;
*/
?>

<?php

header('Content-Type: text/html; charset=UTF-8');

class Vehicle
{
    public function turn()
    {
        echo "Je sais tourner !<br>";
    }
}

class Train extends Vehicle
{
    public function turn()
    {
        echo "Je ne sais pas tourner (car je suis sur des rails) !<br>";
        // redefinir la methode que j'hériter d ma mère
        // normalement jhérite de ma mère ,ma mère dit que ja sais tourner
        // mais je suis un train , je sais pas tourner , donc
        // j'appelle la meme fonction que j'hériter ,
        // et redéfinir ce que je sais faire, comment je suis ...
    }
}

$nicolasTrain = new Train();
$nicolasTrain->turn();
?>


/**********************************************************************************/
/********************* REVOIR TOUT ÇA *******************************************/
/*****************************************************************************/

<?php
/*
header('Content-Type: text/html; charset=UTF-8');

class Car
{
    private $_color;
    private $_speed;
    private $_speedMax;

    // Constructor
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
//si on ne donne pas 3 params ici lors de la création new CAr , ça envoir bcp d'error
echo $fabienCar->getColor();
*/
?>

<?php
/*
header('Content-Type: text/html; charset=UTF-8');

class Car
{
    private $_color;
    private $_speed;
    private $_speedMax;

    // Constructor
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
$fabienCar = new Car('yellow');
// ça va prend le param que je lui donne , ecrase le premier param default
// si je veux changer le 3e param default , faut donner obligatoirement
// les 3  params,dont répéter les 2 premier params default,puis le 3e:comme on veut
//
echo $fabienCar->getColor();

*/

?>
<?php

header('Content-Type: text/html; charset=UTF-8');

class Vehicle
{
    public $color;
    protected $speed;

    public function __construct()
    {
        $this->color = "red";
        $this->speed = 50;
    }

    private function turn()
    {
        echo "Je sais tourner !<br>";
    }
}

class Car extends Vehicle
{
    public function getColor()
    {
        return $this->color;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
}

$anneCar = new Car();
echo 'Couleur: ' . $anneCar->getColor() . '.<br>';
echo $anneCar->getSpeed() . ' km/h.<br>';
$anneCar->speed = 120;
