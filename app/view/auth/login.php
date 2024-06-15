
<!-- ----- début viewInsert -->

<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentPatrimoineMenuLogin.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>

    <form role="form" method='get' action='router1.php'>
        <div class="form-group">
            <input type="hidden" name='action' value='valideUser'>
            <label class='w-25' for="id">Login : </label><input type="text" name='login' size='75'> <br/>
            <label class='w-25' for="id">Password : </label><input type="password" name='password'> <br/>
        </div>
        <p/>
        <br/>
        <button class="btn btn-primary" type="submit">Connexion</button>
    </form>
    <p/>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->