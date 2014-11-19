<?php

// model/categorie_manager.class.php

/**
 * Classe permettant de gérer les categoriees
 */
class CategorieManager extends Model
{
	/**
   * Récupère la liste des users sous la forme d'un tableau à deux dimensions
   * 
   * @return array Tableau à deux dimensions listant les users
   */
	public function listAll()
	{
    // On prépare notre requête SQL
		$query = "SELECT * FROM users ORDER BY idcategorie";

    // On charge notre requête SQL dans la couche d'abstraction PDO
		$statement = $this->PDO->prepare($query);

    // On exécute notre requête SQL
        $statement->execute();

		// On retourne nos résultats SQL (liste des users)
		// sous la forme d'un tableau à deux dimensions
		return $statement->fetchAll();
	}

  /**
   * Ajoute un nouveau categorie dans la BDD
   * 
   * @param  string refCategorie          Réference du categorie
   * @param  string nomCategorie          nom du categorie
   * @param  string desCriptioncategorie  description du categorie
   * @return void
   */
	public function add($refCategorie, $nomCategorie,$descriptionCategorie)
	{
    // On prépare notre requête SQL
		$query = "INSERT INTO users (refCategorie, nomCategorie,descriptionCategorie) VALUES (:refCategorie, :nomCategorie, :descriptionCategorie)";
		
    // On prépare notre tableau faisant le "binding" entre les valeurs de nos variables
    // et celles qui sont envoyées dans la requête SQL (pour éviter les injections)
		$boundValues = [
                        'refCategorie' => $refCategorie,
                        'nomCategorie' => $nomCategorie,
                        'descriptionCategorie' => $descriptionCategorie
                    ];

    // On charge notre requête SQL dans la couche d'abstraction PDO
		$statement = $this->PDO->prepare($query);

    // On exécute notre requête SQL (en liant notre tableau de "binding")
        $statement->execute($boundValues);
	}

  /**
   * Supprime une categorie de la BDD à partir de son identifiant
   * 
   * @param  int    $idcategorie     Identifiant du categorie
   * @return void
   */


    /**
     * Contrôle s'il existe un categorie ayant cet identifiant dans la BDD
     *
     * @param  int    $idcategorie    Identifiant du categorie
     * @return bool                Renvoie TRUE si c'est le cas, FALSE sinon
     */
    public function exists($idCategorie)
    {
        // On prépare notre requête SQL
        $query = "SELECT * FROM users WHERE idCategorie = :idCategorie";

        // On prépare notre tableau faisant le "binding" entre les valeurs de nos variables
        // et celles qui sont envoyées dans la requête SQL (pour éviter les injections)
        $boundValues = [
            'idCategorie' => $idCategorie
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


    public function delete($idCategorie)
	{
    // On prépare notre requête SQL
		$query = "DELETE FROM users WHERE idCategorie = :idCategorie";
		
    // On prépare notre tableau faisant le "binding" entre les valeurs de nos variables
    // et celles qui sont envoyées dans la requête SQL (pour éviter les injections)
		$boundValues = [
			'idCategorie' => $idCategorie
		];

    // On charge notre requête SQL dans la couche d'abstraction PDO
		$statement = $this->PDO->prepare($query);

    // On exécute notre requête SQL (en liant notre tableau de "binding")
    $statement->execute($boundValues);
	}



/***************************************************************************************/
/***************************************************************************************/
/***************************************************************************************/

    /**
     * Crée un objet categorie_manager en récupérant ses propriétés à partir de la BDD
     *
     * @param  int    $idCategorie  Identifiant de la categorie
     * @return mixed 		Renvoie un objet categorie si le categorie existe, FALSE sinon
     */
    public function create($idCategorie)
    {
        // Si aucun dragon n'existe avec cet identifiant
        if (!$this->exists($idCategorie))
        {
            // On ne fait rien et on renvoie FALSE
            return false;
        }
        // Sinon (s'il existe)
        else
        {
            // On prépare notre requête SQL
            $query = "SELECT * FROM users WHERE idCategorie = :idCategorie";

            // On prépare notre tableau faisant le "binding" entre les valeurs de nos               //variables
            // et celles qui sont envoyées dans la requête SQL (pour éviter les injections)
            $boundValues = [
                'idCategorie' => $idCategorie
            ];

            // On charge notre requête SQL dans la couche d'abstraction PDO
            $statement = $this->PDO->prepare($query);

            // On exécute notre requête SQL (en liant notre tableau de "binding")
            $statement->execute($boundValues);

            /* On récupère la ligne correspondante de la table "users" sous la forme                   d'un tableau*/

            $categorieManagerArray = $statement->fetch();

            // On instancie notre classe CategorieManager pour créer un objet                            // CategorieManager
            // avec pour propriétés les données récupérées à partir de la BDD

            $categorieManagerObj = new CategorieManager($categorieManagerArray['idCategorie'],
                $categorieManagerArray['refCategorie'], $categorieManagerArray['nomCategorie'], $categorieManagerArray['descriptionCategorie']);

            // On retourne notre objet Dragon
            return $categorieManagerObj;
        }
    }

/****************************************************************************************/
/****************************************************************************************/
/****************************************************************************************/

}
