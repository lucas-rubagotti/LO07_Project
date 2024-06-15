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

    public static function achatResidence(){
        $residences = ModelResidence::getAllWithoutUser();
        include 'config.php';
        $vue = $root . '/app/view/residence/selectAchatResidence.php';
        if (DEBUG)
            echo ("ControllerProducteur : producteurReadAll : vue = $vue");
        require ($vue);
    }

    public static function selectResidence(){
        $residenceID = $_GET['id'];
        $vendeurID = ModelResidence::getPersonId($_GET['id']);
        $vendeurID = $vendeurID[0]['personne_id'];
        $compteVendeur = ModelCompte::getAllbyPersonID($vendeurID);

        $compteAcheteur = ModelCompte::getAllbyPersonID($_SESSION['user_id']);
        $prix = ModelResidence::getPrixId($_GET['id']);
        
        $prix = $prix[0]['prix'];
        include 'config.php';
        $vue = $root . '/app/view/residence/selectCompte.php';
        if (DEBUG)
            echo ("ControllerProducteur : producteurReadAll : vue = $vue");
        require ($vue);
    }

    public static function compteSelected(){
        
        if(!isset($_GET['compteAcheteur'])||!isset($_GET['compteVendeur'])){
            echo("Un compte n'est pas définit ou n'existe pas");
        }
        $result = ModelCompte::transfert($_GET['prix'],$_GET['compteAcheteur'],$_GET['compteVendeur'],);
        if(!$result){
            include 'config.php';
            $vue = $root . '/app/view/residence/erreur.php';
            if (DEBUG)
                echo ("ControllerProducteur : producteurReadAll : vue = $vue");
            require ($vue);
        }else{
            ModelResidence::modifieResidenceOwner($_GET['residence_id'],$_GET['prix']);
            include 'config.php';
            $vue = $root . '/app/view/residence/residenceVendu.php';
            if (DEBUG)
                echo ("ControllerProducteur : producteurReadAll : vue = $vue");
            require ($vue);
        }
    }

}
?>