<?php
require_once '../model/ModelPersonne.php';
require_once '../model/ModelBanque.php';


class ControllerAdministrateur {
    public static function patrimoineAdmin() {
        include 'config.php';
        $vue = $root . '/app/view/viewPatrimoineAdmin.php';
        require ($vue);
    }

    // --- Liste des banques
    public static function banqueReadAll() {
        $results = ModelBanque::getAll();
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewAllBanques.php';
        require ($vue);
    }

    // --- Ajout d'une banque
    public static function banqueCreate() {
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewInsert.php';
        require ($vue);
    }

    public static function banqueCreated() {
        $results = ModelBanque::insert(
            htmlspecialchars($_GET['label']), htmlspecialchars($_GET['pays'])
        );
        if($results){
            include 'config.php';
            $vue = $root . '/app/view/administrateur/viewInserted.php';
            require ($vue);
        }else{
            include 'config.php';
            $vue = $root . '/app/view/administrateur/errorBanqueCreate.php';
            require ($vue);
        }
    }

     // --- Liste des administrateurs
     public static function listeAdministrateurs() {
        $results = ModelPersonne::getAll();
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewAll.php';
        require ($vue);
    }

    public static function banqueReadAllLabel(){
        $results = ModelBanque::getAllLabel();
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewBanqueLabel.php';
        require ($vue);
    }

    public static function banqueAccounts(){
        $banque_label = $_GET['id'];
        $banque_id = ModelBanque::getIdByLabel($banque_label);
        $comptes = ModelCompte::getAccountByBanqueId($banque_id);
        $personnes = ModelPersonne::getAll();
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewBanqueAccount.php';
        require ($vue);

    }
    public static function listeComptes(){
        $banques = ModelBanque::getAll();
        $comptes = ModelCompte::getAll();
        $personnes = ModelPersonne::getAll();
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewListeCompte.php';
        require ($vue);
    }
    public static function fonctionnalite(){
        $comptes = ModelCompte::getAll();
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewFonctionnalite.php';
        require ($vue);
    }

    public static function mvcUpgrade(){
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewMvcUpgrade.php';
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

