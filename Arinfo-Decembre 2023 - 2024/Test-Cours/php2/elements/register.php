<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../divers/css/register.css">
</head>
<body>
    
    <form action="traitementRegister.php" method="POST">
    <!--<label for="username">Username</label>!-->
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirmPassword" placeholder="Confirm Passord" required>
        <br><input type="submit" value="Envoyer">

        <div class="links">
                <a href="#">Mot de passe oublié</a>
                <span> | </span>
                <a href="../elements/login.php">Connecte toi ?</a>
    </form>

</body>
</html>