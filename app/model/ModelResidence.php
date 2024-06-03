
<!-- ----- debut ModelVin -->

<?php
require_once 'Model.php';

class ModelResidence {
    private $id, $label, $ville, $prix, $personne_id;

    public function __construct($id = NULL, $label = NULL, $ville = NULL, $prix = NULL, $personne_id = NULL) {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($id)) {
            $this->id = $id;
            $this->label = $label;
            $this->ville = $ville;
            $this->prix = $prix;
            $this->personne_id = $personne_id;
        }
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLabel($label) {
        $this->label = $label;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }
    function setPersonne_id($personne_id) {
        $this->personne_id = $personne_id;
    }
    function getId() {
        return $this->id;
    }

    function getLabel() {
        return $this->label;
    }

    function getVille() {
        return $this->ville;
    }

    function getPrix() {
        return $this->prix;
    }
    function getPersonne_id() {
        return $this->personne_id;
    }



// retourne une liste des id
    public static function getAllId() {
        try {
            $database = Model::getInstance();
            $query = "select id from residence";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getMany($query) {
        try {
            $database = Model::getInstance();
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelResidence");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getAll() {
        try {
            $database = Model::getInstance();
            $query = "select * from residence";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelResidence");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getOne($id) {
        try {
            $database = Model::getInstance();
            $query = "select * from residence where id = :id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelResidence");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

}
?>
<!-- ----- fin ModelVin -->
