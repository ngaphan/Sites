<?php

// model/prixHT_manager.class.php

/**
 * Classe permettant de gérer les prixHT
 */
class PrixHTManager extends Model
{
    /**
     * Récupère la liste des PrixHT sous la forme d'un tableau à deux dimensions
     *
     * @return array Tableau à deux dimensions listant les PrixHT
     */
    public function listAll()
    {
        // On prépare notre requête SQL
        $query = "SELECT * FROM prixHT ORDER BY idPrixHT";

        // On charge notre requête SQL dans la couche d'abstraction PDO
        $statement = $this->PDO->prepare($query);

        // On exécute notre requête SQL
        $statement->execute();

        // On retourne nos résultats SQL (liste des PrixHTs)
        // sous la forme d'un tableau à deux dimensions
        return $statement->fetchAll();
    }

    /**
     * Ajoute un nouveau PrixHT dans la BDD
     *
     * @param  string refPrixHT          Réference du PrixHT
     * @param  string nomPrixHT          nom du PrixHT
     * @param  string descriptionPrixHT  description du PrixHT
     * @return void
     */

    public function add($idPrix ,$refProduit, $prixHT , $refTauxTVA)
    {
        // On prépare notre requête SQL
        $query = "INSERT INTO prixHT (idPrix,refProduit, prixHT, refTauxTVA) VALUES (:idPrix,:refProduit, :prixHT , :refTauxTVA)";

        // On prépare notre tableau faisant le "binding" entre les valeurs de nos variables
        // et celles qui sont envoyées dans la requête SQL (pour éviter les injections)
        $boundValues = [
            'idPrix' => $idPrix,
            'refProduit' => $refProduit,
            'prixHT' => $prixHT,
            'refTauxTVA' => $refTauxTVA
        ];

        // On charge notre requête SQL dans la couche d'abstraction PDO
        $statement = $this->PDO->prepare($query);

        // On exécute notre requête SQL (en liant notre tableau de "binding")
        $statement->execute($boundValues);
    }

    /**
     * Supprime une PrixHT de la BDD à partir de son identifiant
     *
     * @param  int    $idPrixHT     Identifiant du PrixHT
     * @return void
     */
    public function delete($idPrix)
    {
        // On prépare notre requête SQL
        $query = "DELETE FROM prixHT WHERE idPrix = :idPrix";

        // On prépare notre tableau faisant le "binding" entre les valeurs de nos variables
        // et celles qui sont envoyées dans la requête SQL (pour éviter les injections)
        $boundValues = [
            'idPrix' => $idPrix
        ];

        // On charge notre requête SQL dans la couche d'abstraction PDO
        $statement = $this->PDO->prepare($query);

        // On exécute notre requête SQL (en liant notre tableau de "binding")
        $statement->execute($boundValues);
    }

    /**
     * Crée un objet prixHT_manager en récupérant ses propriétés à partir de la BDD
     *
     * @param  int    $idPrixHT  Identifiant de la PrixHT
     * @return mixed 		Renvoie un objet PrixHT si le PrixHT existe, FALSE sinon
     */
    public function create($idPrix)
    {
        // Si aucun dragon n'existe avec cet identifiant
        if (!$this->exists($idPrix))
        {
            // On ne fait rien et on renvoie FALSE
            return false;
        }
        // Sinon (s'il existe)
        else
        {
            // On prépare notre requête SQL
            $query = "SELECT * FROM prixHT WHERE idPrix = :idPrix";

            // On prépare notre tableau faisant le "binding" entre les valeurs de nos               //variables
            // et celles qui sont envoyées dans la requête SQL (pour éviter les injections)
            $boundValues = [
                'idPrix' => $idPrix
            ];

            // On charge notre requête SQL dans la couche d'abstraction PDO
            $statement = $this->PDO->prepare($query);

            // On exécute notre requête SQL (en liant notre tableau de "binding")
            $statement->execute($boundValues);

            /* On récupère la ligne correspondante de la table "PrixHTs" sous la forme                   d'un tableau*/

            $prixHTManagerArray = $statement->fetch();

            // On instancie notre classe PrixHTManager pour créer un objet                            // prixHTManager
            // avec pour propriétés les données récupérées à partir de la BDD

            // $idPrixHT ,$refPrixHT, $nomPrixHT,$descriptionPrixHT , $stock

            $prixHTManagerObj = new PrixHTManager($prixHTManagerArray['idPrix'],
                $prixHTManagerArray['refProduit'], $prixHTManagerArray['prixHT'], $prixHTManagerArray['refTauxTVA']);

            // On retourne notre objet Dragon
            return $prixHTManagerObj;
        }
    }

    /**
     * Contrôle s'il existe un PrixHT ayant cet identifiant dans la BDD
     *
     * @param  int    $idPrixHT    Identifiant du PrixHT
     * @return bool                Renvoie TRUE si c'est le cas, FALSE sinon
     */
    public function exists($idPrix)
    {
        // On prépare notre requête SQL
        $query = "SELECT * FROM prixHT WHERE idPrix = :idPrix";

        // On prépare notre tableau faisant le "binding" entre les valeurs de nos variables
        // et celles qui sont envoyées dans la requête SQL (pour éviter les injections)
        $boundValues = [
            'idPrix' => $idPrix
        ];

        // On charge notre requête SQL dans la couche d'abstraction PDO
        $statement = $this->PDO->prepare($query);

        // On exécute notre requête SQL (en liant notre tableau de "binding")
        $statement->execute($boundValues);

        // S'il n'y a aucun enregistrement dans la BDD
        if ($statement->rowCount() === 0)
        {
            // On retourne la valeur FALSE
            return false;
        }
        // Sinon (s'il n'y aucun enregistrement)
        else
        {
            // On retourne la valeur TRUE
            return true;
        }
    }


}
