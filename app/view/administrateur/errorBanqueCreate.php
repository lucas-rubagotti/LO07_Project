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
          <h3>La création de la banque a échoué car tous les paramètres n'étaient pas rempli!</h3>
      </div>

    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>