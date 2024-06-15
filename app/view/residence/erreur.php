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
          <h3>L'achat de la résidence a échoué car vous n'avez pas assez d'argent ou que le choix du prix a été laissé vide ou le vendeur ou vous n'avez pas de compte en banque!</h3>
      </div>

    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>