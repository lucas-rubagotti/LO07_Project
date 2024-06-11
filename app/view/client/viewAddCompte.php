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
        <input type="hidden" name='action' value='createCompte'>        
        <label class='w-25' for="id">Label : </label><input type="text" name='label' size='75'> <br/>                          
        <label class='w-25' for="id">Montant : </label><input type="number" name='montant'> <br/> 
        <label class='w-25' for="banque">Selectionnez une banque : </label>
        <select class="form-control" id='banque' name='banque' style="width: 200px">
            <?php
            foreach ($banques as $banque) {
                echo ("<option value=");
                echo($banque->getId());
                echo(">");
               echo($banque->getLabel());
             echo("</option>");
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