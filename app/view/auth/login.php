<!-- project/views/login.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
<?php if (isset($message)) echo "<p>$message</p>"; ?>
<form method="POST" action="index.php?action=login">
    <label for="login">Login:</label>
    <input type="text" id="login" name="login" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Login</button>
</form>
</body>
</html>
