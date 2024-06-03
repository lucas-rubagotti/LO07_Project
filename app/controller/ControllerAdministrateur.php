
<!-- ----- debut Controller Admin    -->
<?php
require_once '../model/ModelPersonne.php';
require_once '../model/ModelBanque.php';


class ControllerAdministrateur {
    // --- page d'acceuil
    public static function patrimoineAccueil() {
        include 'config.php';
        $vue = $root . '/app/view/viewPatrimoineAccueil.php';
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

}
?>
<!-- ----- fin ControllerVin -->


