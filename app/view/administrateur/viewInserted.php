
<!-- ----- début viewInserted -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentPatrimoineMenuAdmin.php';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
      <div class="mt-4 p-5 bg-warning text-white rounded">
          <h3>Résumé</h3>
      </div>
    <!-- ===================================================== -->
    <?php
    if ($results) {
     echo ("<h3>Une nouvelle banque vient d'être ajouté </h3>");
     echo("<ul>");
     echo ("<li>id = " . $results . "</li>");
     echo ("<li>Label = " . $_GET['label'] . "</li>");
     echo ("<li>Pays = " . $_GET['pays'] . "</li>");
     echo("</ul>");
    } else {
     echo ("<h3>Problème lors de la création de la banque</h3>");
     echo ("Label = " . $_GET['label']);
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    