<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentPatrimoineMenuClient.php';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?> 
    <div class="mt-4 p-5 bg-warning text-white rounded">
          <h3>Erreur lors de la création du compte veuillez remplir tous les paramètres!</h3>
      </div>

    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>