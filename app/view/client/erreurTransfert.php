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
          <h3>Le transfert a échoué car vous n'avez pas assez d'argent dans le compte débiteur, que le prix a été laissé vide ou que les deux comptes sont identiques!</h3>
      </div>

    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>