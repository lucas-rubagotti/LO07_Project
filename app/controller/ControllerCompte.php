<?php
require_once '../model/ModelCompte.php';

class ControllerCompte {
    public static function producteurReadAllRegion() {
        include 'config.php';
        $vue = $root . '/app/view/viewPatrimoineClient.php';
        require ($vue);
    }

    public static function addCompte(){
        $banques = ModelBanque::getAll();
        include 'config.php';
        $vue = $root . '/app/view/client/viewAddCompte.php';
        require ($vue);
    }
    public static function createCompte(){
        $results = ModelCompte::insert(
            htmlspecialchars($_GET['label']), htmlspecialchars($_GET['montant']), htmlspecialchars($_GET['banque'])
        );
        include 'config.php';
        $vue = $root . '/app/view/client/viewCompteAdded.php';
        require ($vue);
    }

    public static function transfertInterComptes(){
        $comptes = ModelCompte::getAll();
        include 'config.php';
        $vue = $root . '/app/view/client/transfert.php';
        require ($vue);
    }
    public static function transfertCompte(){
        $results = ModelCompte::transfert(
            htmlspecialchars($_GET['montant']), htmlspecialchars($_GET['compte1']), htmlspecialchars($_GET['compte2'])
        );
        if($results){
            include 'config.php';
            $vue = $root . '/app/view/client/transfered.php';
            require ($vue);
        }
        else{
            include 'config.php';
            $vue = $root . '/app/view/client/erreurTransfert.php';
            require ($vue);
        }
        
    }
}
?>