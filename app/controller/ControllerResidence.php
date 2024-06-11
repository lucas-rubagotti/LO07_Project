<?php
require_once '../model/ModelResidence.php';

class ControllerResidence {
    // --- Liste des residences
    public static function listeResidences() {
        $residences = ModelResidence::getAll();
        $personnes = ModelPersonne::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/residence/viewAll.php';
        if (DEBUG)
            echo ("ControllerProducteur : producteurReadAll : vue = $vue");
        require ($vue);
    }

    public static function listeMesResidences() {
        $residences = ModelResidence::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/residence/viewResidenceClient.php';
        if (DEBUG)
            echo ("ControllerProducteur : producteurReadAll : vue = $vue");
        require ($vue);
    }

}
?>