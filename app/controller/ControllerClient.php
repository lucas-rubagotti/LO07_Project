
<!-- ----- debut ControllerVin -->
<?php
session_start();
require_once '../model/ModelPersonne.php';

class ControllerClient {
    // --- page d'acceuil
    public static function patrimoineClient() {
        include 'config.php';
        $vue = $root . '/app/view/viewPatrimoineClient.php';
        if (DEBUG)
            echo ("ControllerVin : caveAccueil : vue = $vue");
        require ($vue);
    }

    // --- Liste des client
    public static function listeClients() {
        $results = ModelPersonne::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/client/viewAll.php';
        if (DEBUG)
            echo ("ControllerProducteur : producteurReadAll : vue = $vue");
        require ($vue);
    }
    

    public static function listeMesBanques() {
        $compte = ModelCompte::getBanqueId($_SESSION['user_id']);
        $banque = ModelBanque::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/client/viewBanque.php';
        if (DEBUG)
            echo ("ControllerProducteur : producteurReadAll : vue = $vue");
        require ($vue);
    }

    public static function producteurReadAllRegion() {
        $results = ModelProducteur::getAllRegion();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewAllRegion.php';
        if (DEBUG)
            echo ("ControllerProducteur : producteurReadAllRegion : vue = $vue");
        require ($vue);
    }

    public static function producteurCounterByRegion() {
        $results = ModelProducteur::getCountByRegion();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewCountByRegion.php';
        if (DEBUG)
            echo ("ControllerProducteur : producteurCounterByRegion : vue = $vue");
        require ($vue);
    }
    // Affiche un formulaire pour sélectionner un id qui existe
    public static function producteurReadId() {
        $results = ModelProducteur::getAllId();

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewId.php';
        require ($vue);
    }

    // Affiche un client particulier (id)
    public static function producteurReadOne() {
        $producteur_id = $_GET['id'];
        $results = ModelProducteur::getOne($producteur_id);

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewAllBanques.php';
        require ($vue);
    }

    // Affiche le formulaire de creation d'un client
    public static function producteurCreate() {
        // ----- Construction chemin de la vue
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
        // ----- Construction chemin de la vue
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

}
?>
<!-- ----- fin ControllerVin -->


