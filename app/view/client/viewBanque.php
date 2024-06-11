
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

    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Id</th>
          <th scope = "col">Label compte</th>
          <th scope = "col">Montant</th>
          <th scope = "col">Label banque</th>
        </tr>
      </thead>
      <tbody>
          <?php          
          foreach ($compte as $cpt) {
            foreach($banque as $bq){
                if($bq->getId() == $cpt->getId()){
                    printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", 
                    $cpt->getId(),$cpt->getLabel(),$cpt->getMontant(), $bq->getLabel());
                }
            }
            
      }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  