<?php

class DragonManager
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
        $query = "SELECT * FROM dragons ORDER BY dragonName";
        $statement = $this->DBConnection->prepare($query);
        $statement->execute();

        return $statement->fetchAll();
    }

    public function add($dragonName, $dragonLifeMax, $dragonForce)
    {
        $query = "INSERT INTO dragons (dragonName, dragonLifeMax, dragonForce) VALUES (:dragonName, :dragonLifeMax, :dragonForce)";

        $boundValues = [
            'dragonName' => $dragonName,
            'dragonLifeMax' => $dragonLifeMax,
            'dragonForce' => $dragonForce
        ];

        $statement = $this->DBConnection->prepare($query);
        $statement->execute($boundValues);
    }

    public function delete($dragonId)
    {
        $query = "DELETE FROM dragons WHERE dragonId = :dragonId";

        $boundValues = [
            'dragonId' => $dragonId
        ];

        $statement = $this->DBConnection->prepare($query);
        $statement->execute($boundValues);
    }

    public function create($dragonId)
    {
        if (!$this->exists($dragonId))
        {
            return false;
        }
        else
        {
            $query = "SELECT * FROM dragons WHERE dragonId = :dragonId";

            $boundValues = [
                'dragonId' => $dragonId
            ];

            $statement = $this->DBConnection->prepare($query);
            $statement->execute($boundValues);

            $dragonArray = $statement->fetch();
            $dragonObject = new Dragon($dragonArray['dragonId'], $dragonArray['dragonName'], $dragonArray['dragonLifeMax'], $dragonArray['dragonForce']);

            return $dragonObject;
        }
    }

    public function exists($dragonId)
    {
        $query = "SELECT * FROM dragons WHERE dragonId = :dragonId";

        $boundValues = [
            'dragonId' => $dragonId
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
