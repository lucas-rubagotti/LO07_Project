<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentPatrimoineMenuLogin.html';
        include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
        ?>

        <h2>Register</h2>
        <form role="form" method='get' action='router1.php'>
        <div class="form-group">
            <input type="hidden" name='action' value='register'>
            <label class='w-25' for="id">Nom : </label><input type="text" name='nom' size='75'> <br/>
            <label class='w-25' for="id">Prenom : </label><input type="text" name='prenom'> <br/>
            <label class='w-25' for="statut">Statut:</label>
            <select id="statut" name="statut">
                <option value="1">Client</option>
                <option value="0">Administrateur</option>
            </select>
            <br/>
            <label class='w-25' for="statut">Login :</label><input type="text" name='login'> <br/>
            <label class='w-25' for="statut">Password :</label><input type="password" name='password'> <br/>
        </div>
        <p/>
        <br/>
        <button class="btn btn-primary" type="submit">Connexion</button>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>