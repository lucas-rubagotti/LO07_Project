
<!-- ----- debut Controller Admin    -->
<?php
require_once '../model/ModelPersonne.php';
require_once '../model/ModelBanque.php';


class ControllerAdministrateur {
    // --- page d'acceuil
    public static function patrimoineAdmin() {
        include 'config.php';
        $vue = $root . '/app/view/viewPatrimoineAdmin.php';
        if (DEBUG)
            echo ("ControllerVin : patrimoineAccueil : vue = $vue");
        require ($vue);
    }

    // --- Liste des banques
    public static function banqueReadAll() {
        $results = ModelBanque::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewAllBanques.php';
        if (DEBUG)
            echo ("ControllerAdministrateur : banqueReadAll : vue = $vue");
        require ($vue);
    }

    // --- Ajout d'une banque
    public static function banqueCreate() {
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewInsert.php';
        require ($vue);
    }

    // Affiche un formulaire pour récupérer les informations d'une nouvelle banque
    // La clé est gérée par le systeme et pas par l'internaute
    public static function banqueCreated() {
        // ajouter une validation des informations du formulaire
        $results = ModelBanque::insert(
            htmlspecialchars($_GET['label']), htmlspecialchars($_GET['pays'])
        );
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewInserted.php';
        require ($vue);
    }

     // --- Liste des administrateurs
     public static function listeAdministrateurs() {
        $results = ModelPersonne::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewAll.php';
        if (DEBUG)
            echo ("ControllerAdmin : vue = $vue");
        require ($vue);
    }

    public static function banqueReadAllLabel(){
        $results = ModelBanque::getAllLabel();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/administrateur/viewBanqueLabel.php';
        if (DEBUG)
            echo ("ControllerAdmin : vue = $vue");
        require ($vue);
    }

    public static function deconnexion(){
        session_destroy();
        include 'config.php';
        $vue = $root . '/app/view/viewPatrimoineAccueil.php';
        if (DEBUG)
            echo ("ControllerAdmin : patrimoineAccueil : vue = $vue");
        require ($vue);
    }

}
?>
<!-- ----- fin ControllerVin -->


