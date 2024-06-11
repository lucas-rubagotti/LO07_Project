
<!-- ----- début viewInserted -->
<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
$_SESSION['user_id'] = $personne[0]->getId();
$_SESSION['user_name'] = $personne[0]->getNom();
$_SESSION['statut'] = $personne[0]->getStatut();
$_SESSION['is_authenticated'] = true;
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    if($_SESSION['statut']==0){
      include $root . '/app/view/fragment/fragmentPatrimoineMenuAdmin.html';
    }else if($_SESSION['statut']==1){
      include $root . '/app/view/fragment/fragmentPatrimoineMenuClient.html';
    }
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    
    ?>
    <!-- ===================================================== -->
    <?php
    if ($personne) {
     echo ("<h3>Vous êtes connecté </h3>");
     echo("<ul>");
     echo ("<li>Nom = " . $_GET['login'] . "</li>");
     echo("</ul>");
    } else {
     echo ("<h3>Problème de connexion</h3>");
     echo ("Nom = " . $_GET['login']);
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    