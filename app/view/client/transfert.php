<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentPatrimoineMenuClient.php';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?> 

    <form role="form" method='get' action='router1.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='transfertCompte'>                               
        <label class='w-25' for="id">Montant : </label><input type="number" name='montant'> <br/> 
        <label class='w-25' for="banque">Selectionnez un compte : </label>
        <select class="form-control" id='compte1' name='compte1' style="width: 300px">
            <?php
            foreach ($comptes as $compte) {
                if($_SESSION['user_id']==$compte->getPersonne_id()){
                    echo ("<option value=");
                echo($compte->getId());
                echo(">");
               echo($compte->getLabel());
             echo("</option>");
                }
                
            }
            ?>
        </select>
        <label class='w-25' for="banque">Selectionnez un deuxieme compte : </label>
        <select class="form-control" id='compte2' name='compte2' style="width: 300px">
            <?php
            foreach ($comptes as $compte) {
                if($_SESSION['user_id']==$compte->getPersonne_id()){
                echo ("<option value=");
                echo($compte->getId());
                echo(">");
               echo($compte->getLabel());
             echo("</option>");
            }

            }
            ?>
        </select>     
        <br/>          
      </div>
      <p/>
       <br/> 
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>