
<!-- ----- debut Router1 -->
<?php
require ('../controller/ControllerAdministrateur.php');
require ('../controller/ControllerClient.php');
require ('../controller/ControllerAuth.php');



// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

// --- Liste des méthodes autorisées
switch ($action) {
 case "banqueReadAll" :
  ControllerAdministrateur::$action();
  break;
 case "login":
 case "valideUser":
  ControllerAuth::$action();
  break;

 // Tache par défaut
 default:
     $action = 'patrimoineAccueil';
     ControllerAuth::$action();
     break;
}
?>
<!-- ----- Fin Router1 -->

