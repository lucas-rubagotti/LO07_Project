
<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>
      <div class="mt-4 p-5 bg-warning text-white rounded">
          <h3>Listes des banques vue par l'administrateur</h3>
      </div>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Id</th>
          <th scope = "col">Label</th>
          <th scope = "col">Pays</th>
        </tr>
      </thead>
      <tbody>
          <?php
          foreach ($results as $element) {
           printf("<tr><td>%d</td><td>%s</td><td>%s</td></tr>", $element->getId(),
             $element->getLabel(), $element->getPays());
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  