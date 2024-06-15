<!-- ----- debut ModelVin -->

<?php
require_once 'Model.php';

class ModelPersonne
{
    private $id, $nom, $prenom, $statut, $login, $password;
    public const ADMINISTRATEUR = 0;
    public const CLIENT = 1;
    public function __construct($id = NULL, $nom = NULL, $prenom = NULL, $statut = NULL, $login = NULL, $password = NULL)
    {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($id)) {
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->statut = $statut;
            $this->login = $login;
            $this->password = $password;

        }
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setNom($nom)
    {
        $this->nom = $nom;
    }

    function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    function setstatut($statut)
    {
        $this->statut = $statut;
    }
    function setLogin($login)
    {
        $this->login = $login;
    }
    function setPassword($password)
    {
        $this->password = $password;
    }

    function getId()
    {
        return $this->id;
    }

    function getNom()
    {
        return $this->nom;
    }

    function getPrenom()
    {
        return $this->prenom;
    }

    function getstatut()
    {
        return $this->statut;
    }

    function getLogin()
    {
        return $this->login;
    }
    function getPassword()
    {
        return $this->password;
    }

    // retourne une liste des id
    public static function getNameById($id)
    {
        try {
            $database = Model::getInstance();
            $query = "select nom from personne where id = :id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id
            ]);
            $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
    public static function getAllId()
    {
        try {
            $database = Model::getInstance();
            $query = "select id from personne";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getMany($query)
    {
        try {
            $database = Model::getInstance();
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelPersonne");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getAll()
    {
        try {
            $database = Model::getInstance();
            $query = "select * from personne";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelPersonne");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getByCredentials($login, $password)
    {
        try {
            $database = Model::getInstance();
            $query = "select * from personne where login = :login and password = :password";
            $statement = $database->prepare($query);
            $statement->execute([
                'login' => $login,
                'password' => $password
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelPersonne");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }

    }
    public static function getOne($id)
    {
        try {
            $database = Model::getInstance();
            $query = "select * from personne where id = :id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelPersonne");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function createPersonne($nom,$prenom,$statut,$login,$password)
    {
        try {
            if(!isset($nom)&&!isset($prenom)&&!isset($statut)&&!isset($login)&&!isset($password)){
                return false;
            }

            $database = Model::getInstance();
            $query = "SELECT MAX(id) AS max_id FROM personne";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);

            $database = Model::getInstance();
            $query = "INSERT INTO personne (id, nom, prenom, statut, login,password)
                     VALUES (:id, :nom, :prenom, :statut, :login, :password);";

            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $results[0]['max_id']+1,
                'nom' => $nom,
                'prenom' => $prenom,
                'statut' => $statut,
                'login' => $login,
                'password' => $password
            ]);
            return true;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
}
?>
<!-- ----- fin ModelVin -->