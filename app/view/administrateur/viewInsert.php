
<!-- ----- début viewInsert -->
 
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
          <h3>Création d'une nouvelle banque</h3>
      </div>

    <form role="form" method='get' action='router1.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='banqueCreated'>
        <label class='w-25' for="id">Label : </label><input type="text" name='label' size='75' value='Crédit de Troyes'> <br/>
        <label class='w-25' for="id">Pays : </label><input type="text" name='pays' value='France'> <br/>
      </div>
      <p/>
       <br/> 
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->



