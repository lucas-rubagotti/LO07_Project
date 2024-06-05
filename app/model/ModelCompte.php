
<!-- ----- debut ModelVin -->

<?php
require_once 'Model.php';

class ModelCompte {
    private $id, $label, $montant, $banque_id, $personne_id;

    public function __construct($id = NULL, $label = NULL, $montant = NULL, $banque_id = NULL, $personne_id = NULL) {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($id)) {
            $this->id = $id;
            $this->label = $label;
            $this->montant = $montant;
            $this->banque_id = $banque_id;
            $this->personne_id = $personne_id;
        }
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLabel($label) {
        $this->label = $label;
    }

    function setMontant($montant) {
        $this->montant = $montant;
    }

    function setBanque_id($banque_id) {
        $this->banque_id = $banque_id;
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

    function getMontant() {
        return $this->montant;
    }

    function getBanque_id() {
        return $this->banque_id;
    }
    function getPersonne_id() {
        return $this->personne_id;
    }

// retourne une liste des id
    public static function getAllId() {
        try {
            $database = Model::getInstance();
            $query = "select id from compte";
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
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelCompte");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getAll() {
        try {
            $database = Model::getInstance();
            $query = "select * from compte";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelCompte");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }


    public static function getOne($id) {
        try {
            $database = Model::getInstance();
            $query = "select * from compte where id = :id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelCompte");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function insert($label, $montant, $banque_id, $personne_id) {
        try {
            $database = Model::getInstance();

            // recherche de la valeur de la clé = max(id) + 1
            $query = "select max(id) from compte";
            $statement = $database->query($query);
            $tuple = $statement->fetch();
            $id = $tuple['0'];
            $id++;

            // ajout d'un nouveau tuple;
            $query = "insert into compte value (:id, :label, :montant, :banque_id, :personne_id)";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id,
                'label' => $label,
                'montant' => $montant,
                'banque_id' => $banque_id,
                'personne_id' => $personne_id
            ]);
            return $id;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1;
        }
    }
}
?>
<!-- ----- fin ModelVin -->
