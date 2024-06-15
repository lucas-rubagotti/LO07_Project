
<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentPatrimoineMenuLogin.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>
      <div class="mt-4 p-5 bg-warning text-white rounded">
          <h3>Montant total d'argent en circulation</h3>
      </div>
      <table class = "table table-striped table-bordered">
          <tr>
              <th scope = "col">Montant</th>

          </tr>
          <tbody>
          <?php
          $argentTot = 0;
          foreach ($personnes as $personne) {
              foreach ($banques as $banque) {
                  foreach ($comptes as $compte) {
                      if ($personne->getId() == $compte->getPersonne_id()) {
                              $argentTot += $compte->getMontant();
                      }
                  }
              }
          }
          printf("<tr><td>%d</td></tr>",$argentTot);

          ?>

          </tbody>
      </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  