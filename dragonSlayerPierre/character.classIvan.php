<?php

class Character
{
    protected $armor;
    protected $life;
    protected $lifeMax;
    protected $name;
    protected $weapon;

    public function __construct($name, $lifeMax, $armor, $weapon = null)
    {
        $this->setArmor($armor);
        $this->setLife($lifeMax);
        $this->setLifeMax($lifeMax);
        $this->setName($name);
        if (!is_null($weapon))
        {
            $this->setWeapon($weapon);
        }
    }

    public function getArmor() { return $this->armor; }
    public function getLife() { return $this->life; }
    public function getLifeMax() { return $this->lifeMax; }
    public function getName()   { return $this->name; }
    public function getWeapon   { return $this->weapon; }
    {
        if (!is_int($armor) || $armor < 0)
        {
            echo 'Class Character : $armor n\'est pas un nombre entier.';
        }
        else
        {
            $this->armor = $armor;
        }
    }

    public function setLife($life)
    {
        if (!is_numeric($life))
        {
            echo 'Class Character : $life n\'est pas un nombre.';
        }
        else
        {
            $this->life = (float) $life;
        }
    }

    public function setLifeMax($lifeMax)
    {
        if (!is_numeric($lifeMax))
        {
            echo 'Class Character : $lifeMax n\'est pas un nombre.';
        }
        else
        {
            $this->lifeMax = (float) $lifeMax;
        }
    }

    public function setName($name)
    {
        if (!is_string($name))
        {
            echo 'Class Character : $name n\'est pas une chaîne de caractères.';
        }
        else
        {
            $this->name = $name;
        }
    }
    public function setWeapon(Weapon $weaponObject)
    {
        $this->weapon = $weaponObject;
    }

}