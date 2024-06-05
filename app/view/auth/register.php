<!-- project/views/register.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h2>Register</h2>
<?php if (isset($message)) echo "<p>$message</p>"; ?>
<form method="POST" action="index.php?action=register">
    <label for="no">Numéro:</label>
    <input type="text" id="no" name="no" required>
    <br>
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom" required>
    <br>
    <label for="statut">Statut:</label>
    <select id="statut" name="statut">
        <option value="1">Client</option>
        <option value="0">Administrateur</option>
    </select>
    <br>
    <label for="login">Login:</label>
    <input type="text" id="login" name="login" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Register</button>
</form>
</body>
</html>
