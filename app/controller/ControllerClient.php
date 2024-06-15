
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


