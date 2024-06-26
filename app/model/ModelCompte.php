
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
    public static function getAccountByBanqueId($id) {
        try {
            $database = Model::getInstance();
            $query = "select * from compte where banque_id = :id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id'=>$id
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelCompte");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }



    public static function getBanqueId($id) {
        try {
            $database = Model::getInstance();
            $query = "select * from compte where personne_id = :id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id'=>$id
            ]);
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

    public static function getAllbyPersonID($id) {
        try {
            $database = Model::getInstance();
            $query = "select * from compte where personne_id = :id";
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

    public static function getAllClient(){
        try{
            $database = Model::getInstance();
            $query = "select * from compte where personne_id = :id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $_SESSION['user_id']
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelCompte");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function transfert($montant,$compte1Id,$compte2Id) {
        try {
            //gestion erreur s'il n'y a pas assez d'argent
            $database = Model::getInstance();
            $query = "select montant from compte where id = :id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $compte1Id
            ]);
            $montantcpt1 = $statement->fetchAll(PDO::FETCH_ASSOC);

            $database = Model::getInstance();
            $query = "select montant from compte where id = :id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $compte2Id
            ]);
            $montantcpt2 = $statement->fetchAll(PDO::FETCH_ASSOC);
            if($montantcpt1[0]['montant']<$montantcpt2[0]['montant']){
                echo("erreur");
                return FALSE;
            }
            if($compte1Id == $compte2Id){
                return FALSE;
            }

            //effectue les modifications
            $database = Model::getInstance();
            $query = "UPDATE compte
                        SET montant = montant + :montant
                        WHERE id = :compte2Id;";

            $statement = $database->prepare($query);
            $statement->execute([
                'montant' => $montant,
                'compte2Id' => $compte2Id
            ]);

            $database = Model::getInstance();
            $query = "UPDATE compte
                        SET montant = montant - :montant
                        WHERE id = :compte1Id;";

            $statement = $database->prepare($query);
            $statement->execute([
                'montant' => $montant,
                'compte1Id' => $compte1Id
            ]);

            $results = TRUE;
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function insert($label, $montant, $banque_id) {
        try {
            if(!isset($label)||!isset($montant)||!isset($banque_id)){
                return false;
            }
            if(empty($label)||empty($banque_id)||empty($montant)){
                return false;
            }
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
                'personne_id' => $_SESSION['user_id']
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
