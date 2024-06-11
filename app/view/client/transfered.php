
<!-- ----- début viewInserted -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentPatrimoineMenuClient.php';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results) {
     echo ("<h3>Le transfert a été effectué a été ajouté </h3>");
     echo("<ul>");
     echo ("<li>id = " . $results . "</li>");
     echo ("<li>compte = " . $_GET['montant'] . "</li>");
     echo ("<li>montant = " . $_GET['compte1'] . "</li>");
     echo ("<li>banque = " . $_GET['compte2'] . "</li>");
     echo("</ul>");
    } else {
        echo($results);
     echo ("<h3>Problème de transfert</h3>");
     echo ("id = " . $_GET['compte1']);
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    
