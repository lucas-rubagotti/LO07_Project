<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentPatrimoineMenuClient.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>

    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">residence_label</th>
          <th scope = "col">residence_ville</th>
          <th scope = "col">residence_prix</th>
        </tr>
      </thead>
      <tbody>
          <?php
          // La liste des vins est dans une variable $results             
          foreach ($residences as $residence) {
            
                    if($residence->getPersonne_id() == $_SESSION['user_id']){
                        printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", 
                        $residence->getLabel(), $residence->getVille(), $residence->getPrix());
                    }
            
                
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>
