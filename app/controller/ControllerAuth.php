<?php
// project/controllers/ControllerAuth.php
require_once '../model/ModelPersonne.php';
class ControllerAuth {
    public static function inscription(){
        include 'config.php';
        $vue = $root . '/app/view/auth/register.php';
        require ($vue);
    }

    public static function register(){
        $result = ModelPersonne::createPersonne($_GET['nom'],$_GET['prenom'],$_GET['statut'],$_GET['login'],$_GET['password']);
        if($result){
            include 'config.php';
            $vue = $root . '/app/view/auth/registered.php';
            require ($vue);
        }else{
            include 'config.php';
            $vue = $root . '/app/view/auth/errorRegistering.php';
            require ($vue);
        }
    }

    public static function patrimoineAccueil() {
        include 'config.php';
        $vue = $root . '/app/view/viewPatrimoineAccueil.php';
        require ($vue);
    }
    public static function login() {
        include 'config.php';
        $vue = $root . '/app/view/auth/login.php';
        require ($vue);
    }

    public static function valideUser(){
        $personne = ModelPersonne::getByCredentials(
            htmlspecialchars($_GET['login']), htmlspecialchars($_GET['password']),
        );
        if(!$personne){
            include 'config.php';
        $vue = $root . '/app/view/auth/errorLogining.php';
        require ($vue);
        }
        else{
            include 'config.php';
            $vue = $root . '/app/view/auth/logedOn.php';
            require ($vue);
        }
    }

}
?>