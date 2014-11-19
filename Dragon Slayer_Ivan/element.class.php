<?php
class Element
{
    protected $id ;
    protected $name ;

    public function __construct( $id ,$name)
    {
        $this->setId($id);
        $this->setName($name);
    }

    public   function setId($id)
    {
        if(!is_numeric($id) || $id < 0 )
        {
            echo $id .' doit être un nombre positif.';
        }
        else
        {
            $this->id = (float) $id;
        }
    }
    public   function setName($name)
    {
        if(!is_string($name) || $name < 0 )
        {
            echo $name .' doit être unechaîne de caractère.';
        }
        else
        {
            $this->name =  $name ;
        }
    }

    public function getId()  { return $this->id ;    }
    public function getName(){ return $this->name ;  }

}



/*
 *
 * <?php

class Element
{
  protected $id;
  protected $name;

  public function getId() { return $this->id; }
  public function getName() { return $this->name; }

  public function setId($id)
  {
    $id = (int) $id;

    if ($id <= 0)
    {
      echo 'Class ' . get_class($this) . ': $id doit être un nombre entier positif différent de 0.';
// get-class veut dire affiche moi tout ce qu'il y a ds cette class
    }
    else
    {
      $this->id = $id;
    }
  }

  public function setName($name)
  {
    if (!is_string($name))
    {
      echo 'Class ' . get_class($this) . ': $name doit être une chaîne de caractères.';
    }
    else
    {
      $this->name = $name;
    }
  }
}
 */