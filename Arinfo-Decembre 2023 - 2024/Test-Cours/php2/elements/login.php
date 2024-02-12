



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../divers/css/login.css">
</head>
<body>
    
    <form action="../traitementLogin.php" method="post">
    <!--<label for="username">Username</label>!-->
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <br><input type="submit" name="submit" value="Envoyer">
        <div class="links">
                <a href="#">Mot de passe oublié</a>
                <span> | </span>
                <a href="elements/register.php">Inscris toi ?</a>
    </form>




</body>
</html>