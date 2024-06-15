
<!-- ----- début viewAll -->
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
          <h3>Listes des comptes</h3>
      </div>
      <table class = "table table-striped table-bordered">
          <tr>
              <th scope = "col">Nom</th>
              <th scope = "col">Prénom</th>
              <th scope = "col">Banque</th>
              <th scope = "col">Compte</th>
              <th scope = "col">Montant</th>

          </tr>
          <tbody>
          <?php
          foreach ($comptes as $element) {
              foreach ($banques as $banque) {
                  if ($element->getBanque_id() == $banque->getId()) {
                      foreach ($personnes as $personne) {
                          if ($personne->getId() == $element->getPersonne_id()) {
                              printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%d</td></tr>",$personne->getNom(), $personne->getPrenom(), $banque->getLabel(), $element->getLabel(), $element->getMontant());
                          }
                      }
                  }
              }
          }


          ?>
          </tbody>
      </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  