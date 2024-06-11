
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

    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">nom</th>
          <th scope = "col">prenom</th>
          <th scope = "col">login</th>
          <th scope = "col">mot de passe</th>
        </tr>
      </thead>
      <tbody>
          <?php
          // La liste des vins est dans une variable $results             
          foreach ($results as $element) {
            if($element->getStatut()==ModelPersonne::CLIENT){
                printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", 
                $element->getNom(), $element->getPrenom(), $element->getLogin(),$element->getPassword());
            }
           
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  