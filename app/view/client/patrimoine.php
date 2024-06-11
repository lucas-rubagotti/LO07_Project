
<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentPatrimoineMenuClient.php';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>
      <br>

    <table class = "table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope = "col">Catégorie</th>
          <th scope = "col">Label</th>
          <th scope = "col">Valeur</th>
          <th scope = "col">Capital</th>
        </tr>
      </thead>
      <tbody>
          <?php
          $capital=0;
          // La liste des vins est dans une variable $results             
          foreach ($comptes as $compte) {
            printf("<tr class='table-info'><td>compte</td><td>%s</td><td>%s</td><td>%s</td></tr>", 
            $compte->getLabel(), $compte->getMontant(),$capital=$capital+$compte->getMontant());
          }
          foreach ($residences as $residence) {
            printf("<tr class='table-success'><td>résidence</td><td>%s</td><td>%s</td><td>%s</td></tr>", 
            $residence->getLabel(), $residence->getPrix(),$capital=$capital+$residence->getPrix());
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  