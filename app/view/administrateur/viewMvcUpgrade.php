
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
          <h3>Amélioration du code MVC</h3>

      </div>
      <div class="mt-4 p-5 bg-warning text-white rounded">
         <ul>
             <li><h4>Création de différents algorithmes pour permettre un débogage plus efficace et plus rapide</h4></li>
             <li><h4>Utilisation de différents frameworks pour ajouter de nouvelles fonctionnalitées au site tout en le rendant plus interactif</h4></li>
             <li><h4>Documentation claire pour permettre une maintenabilité et une évolutivité optimale</h4></li>
         </ul>
      </div>

  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  