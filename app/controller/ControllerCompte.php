<?php
require_once '../model/ModelCompte.php';

class ControllerCompte {
    public static function producteurReadAllRegion() {
        include 'config.php';
        $vue = $root . '/app/view/viewPatrimoineClient.php';
        if (DEBUG)
            echo ("ControllerVin : caveAccueil : vue = $vue");
        require ($vue);
    }

}
?>