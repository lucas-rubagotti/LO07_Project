
<!-- ----- debut ControllerVin -->
<?php
session_start();
require_once '../model/ModelPersonne.php';

class ControllerClient {
    // --- page d'acceuil
    public static function patrimoineClient() {
        include 'config.php';
        $vue = $root . '/app/view/viewPatrimoineClient.php';
        require ($vue);
    }

    // --- Liste des client
    public static function listeClients() {
        $results = ModelPersonne::getAll();
        include 'config.php';
        $vue = $root . '/app/view/client/viewAll.php';
        require ($vue);
    }
    

    public static function listeMesBanques() {
        $compte = ModelCompte::getBanqueId($_SESSION['user_id']);
        $banque = ModelBanque::getAll();
        include 'config.php';
        $vue = $root . '/app/view/client/viewBanque.php';
        require ($vue);
    }

    public static function producteurReadAllRegion() {
        $results = ModelProducteur::getAllRegion();
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewAllRegion.php';
        require ($vue);
    }

    public static function producteurCounterByRegion() {
        $results = ModelProducteur::getCountByRegion();
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewCountByRegion.php';
        require ($vue);
    }
    // Affiche un formulaire pour sélectionner un id qui existe
    public static function producteurReadId() {
        $results = ModelProducteur::getAllId();
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewBanqueLabel.php';
        require ($vue);
    }

    // Affiche un client particulier (id)
    public static function producteurReadOne() {
        $producteur_id = $_GET['id'];
        $results = ModelProducteur::getOne($producteur_id);

        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewAllBanques.php';
        require ($vue);
    }

    // Affiche le formulaire de creation d'un client
    public static function producteurCreate() {

        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewInsert.php';
        require ($vue);
    }

    // Affiche un formulaire pour récupérer les informations d'un nouveau client.
    // La clé est gérée par le systeme et pas par l'internaute
    public static function producteurCreated() {
        // ajouter une validation des informations du formulaire
        $results = ModelProducteur::insert(
            htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['prenom']), htmlspecialchars($_GET['region'])
        );

        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewInserted.php';
        require ($vue);
    }
    
    public static function bilanPatrimoine(){
        $comptes = ModelCompte::getAllClient();
        $residences = ModelResidence::getAllClient();
        include 'config.php';
        $vue = $root . '/app/view/client/patrimoine.php';
        require ($vue);
    }


    public static function deconnexion(){
        session_destroy();
        include 'config.php';
        $vue = $root . '/app/view/viewPatrimoineAccueil.php';
        require ($vue);
    }

}
?>
<!-- ----- fin ControllerVin -->


