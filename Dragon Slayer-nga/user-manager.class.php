<?php

class UserManager
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
        $query = " SELECT * FROM users ORDER BY username ";
        $statement = $this->DBConnection->prepare($query);
        $statement->execute();

        return $statement->fetchAll();
    }

    public function add($username , $mdp, $nom , $prenom , $email )
    // ces variables vont à droite de $bound
    {
        $query =" INSERT INTO users (username, mdp, nom ,prenom , email)
                 VALUES(:username, :mdp, :nom ,:prenom , :email ) ";
                 // ces valeurs vont à gauche de $boundBD
        $boundBD = [
                        "username" => $username,
                        "mdp" => hash("sha512",$mdp.PASS_PHRASE),
                        "nom" => $nom ,
                        "prenom" => $prenom ,
                        "email" => $email
                    ];

        $statement = $this->DBConnection->prepare($query);
        $statement->execute($boundBD);
    }

    public function delete($userId)
    {
        $query ="DELETE FROM users WHERE userId = :userId "  ;
        $boundBD = ["userId" => $userId ];

        $statement = $this->DBConnection->prepare($query);
        $statement->execute($boundBD);
    }

    public function create($userId)
    {
        // je fais ma requete
        $query = " SELECT * FROM users WHERE userId = :userId ";

        // je fais la corespondance entre la valeur reçu en param av BDD
        $boundBD = ["userId"        =>  $userId       ];

        $statement = $this->DBConnection->prepare($query);// je prepare ma requete
        // $this->DBConnection veut dire que j'attache la propriété "DBConnection" à moi meme
        // j'attache la methode "prepare" à ma propriété
        // methode "prepare" retourn " 1 obj de type PDOStatement"( voir "return values")
        // le récupe et le mettre dans la variable " $statement "

        $statement->execute($boundBD);// j'execute ma requete
        // methode "execute" retourn " 1 obj de type PDOStatement"

        if($statement->rowCount() === 0)
            // rowCount est 1 methode de PDOStatement( chercher ds php.net)
            // vérifie si l'indice exist ,ex: on a que 10dragon , il ns donne l'indice 14
        {
            return false ;
        }
        else
        {
            $userArray = $statement->fetch() ;
            $userObj = new User($userArray["userId"] ,$userArray["userame"], $userArray["mdp"], $userArray["nom"],$userArray["prenom"],$userArray["email"]);
            return $userObj ;
        }
    }
}