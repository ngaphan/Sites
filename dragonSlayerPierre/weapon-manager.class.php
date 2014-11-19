<?php

class WeaponManager
{
    protected $DBConnection;

    public function __construct($DBConnection)
    {
        $this->setDBConnection($DBConnection);
    }

    public function setDBConnection(PDO $DBConnectionObject)
    {
        $this->DBConnection = $DBConnectionObject;
    }

    public function listAll()
    {
        $query = "SELECT * FROM weapons ORDER BY weaponName";
        $statement = $this->DBConnection->prepare($query);
        $statement->execute();

        return $statement->fetchAll();
    }

    public function add($weaponName, $weaponForce)
    {
        $query = "INSERT INTO weapons (weaponName, weaponForce) VALUES (:weaponName, :weaponForce)";

        $boundValues = [
            'weaponName' => $weaponName,
            'weaponForce' => $weaponForce
        ];

        $statement = $this->DBConnection->prepare($query);
        $statement->execute($boundValues);
    }

    public function delete($weaponId)
    {
        $query = "DELETE FROM weapons WHERE weaponId = :weaponId";

        $boundValues = [
            'weaponId' => $weaponId
        ];

        $statement = $this->DBConnection->prepare($query);
        $statement->execute($boundValues);
    }

    public function create($weaponId)
    {
        if (!$this->exists($weaponId))
        {
            return false;
        }
        else
        {
            $query = "SELECT * FROM weapons WHERE weaponId = :weaponId";

            $boundValues = [
                'weaponId' => $weaponId
            ];

            $statement = $this->DBConnection->prepare($query);
            $statement->execute($boundValues);

            $weaponArray = $statement->fetch();
            $weaponObject = new Weapon($weaponArray['weaponId'], $weaponArray['weaponName'], $weaponArray['weaponForce']);

            return $weaponObject;
        }
    }

    public function exists($weaponId)
    {
        $query = "SELECT * FROM weapons WHERE weaponId = :weaponId";

        $boundValues = [
            'weaponId' => $weaponId
        ];

        $statement = $this->DBConnection->prepare($query);
        $statement->execute($boundValues);

        if ($statement->rowCount() === 0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}
