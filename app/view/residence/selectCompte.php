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
        <input type="hidden" name='action' value='compteSelected'>                               
        <label class='w-25' for="cpt">Selectionnez le compte de l'acheteur : </label>
        <select class="form-control" id='compteAcheteur' name='compteAcheteur' style="width: 300px">
            <?php
            foreach ($compteAcheteur as $cpt) {
                
                echo ("<option value=");
                echo($cpt->getId());
                echo(">");
                echo($cpt->getLabel());
                echo("</option>");
            }
            ?>
        </select>
        <label class='w-25' for="cpt2">Selectionnez le compte du vendeur : </label>
        <select class="form-control" id='compteVendeur' name='compteVendeur' style="width: 300px">
            <?php
            foreach ($compteVendeur as $cpt) {
                
                echo ("<option value=");
                echo($cpt->getId());
                echo(">");
                echo($cpt->getLabel());
                echo("</option>");
            }
            ?>
        </select>
        <label class='w-25' for="cpt2">Prix :</label>
        <input type="text" name='prix' value='<?php echo($prix)?>'>
        <input type="hidden" name='residence_id' value='<?php echo($residenceID)?>'>
        <br/>          
      </div>
      <p/>
       <br/> 
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>