<?php

class Weapon extends Element
{
    protected $force;

    public function __construct($id, $name, $force)
    {
        $this->setForce($force);
        $this->setId($id);
        $this->setName($name);
    }

    public function getForce() { return $this->force; }

    public function setForce($force)
    {
        $force = (int) $force;

        if ($force < 0)
        {
            echo 'Class Weapon : $force doit être un nombre entier positif.';
        }
        else
        {
            $this->force = $force;
        }
    }
}

