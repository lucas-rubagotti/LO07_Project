
<!-- ----- début viewInserted -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentPatrimoineMenuAdmin.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results) {
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

    
    