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
        <input type="hidden" name='action' value='selectResidence'>                               
        <label class='w-25' for="banque">Selectionnez une résidence pour un achat : </label>
        <select class="form-control" id='id' name='id' style="width: 300px">
            <?php
            foreach ($residences as $residence) {
                echo "<option value='{$residence->getId()}'>{$residence->getLabel()}</option>";
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