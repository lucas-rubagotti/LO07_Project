<?php
// project/controllers/ControllerAuth.php
class ControllerAuth {

    public static function patrimoineAccueil() {
        include 'config.php';
        $vue = $root . '/app/view/viewPatrimoineAccueil.php';
        if (DEBUG)
            echo ("ControllerVin : patrimoineAccueil : vue = $vue");
        require ($vue);
    }
    public static function login() {
        include 'config.php';
        $vue = $root . '/app/view/auth/login.php';
        require ($vue);
    }

    public static function valideUser(){
        // ajouter une validation des informations du formulaire
        $results = ModelPersonne::getByCredentials(
            htmlspecialchars($_GET['login']), htmlspecialchars($_GET['password']),
        );
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/auth/logedOn.php';
        require ($vue);
    }

}
?>