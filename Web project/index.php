<?php
include 'php/connection.php';
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/CSS" href="CSS/login.css">

<head>
    <title>Login</title>
    <img src="Img/GroenLinks_logo.png" alt="">
</head>

<body>
    <div>
        <div>
            <h1>Login</h1>
        </div>
        <div>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="Gebruiker">Gebruikersnaam:</label>
                <input type="text" id="Gebruiker" name="Gebruiker" required>
                <label for="wachtwoord">Wachtwoord:</label>
                <input type="wachtwoord" id="wachtwoord" name="wachtwoord" required>
                <button type="submit" name="login">Login</button>
            </form>
        </div>
        <div>
            <a href="create_account.php" class="create-account">Create Account</a>
        </div>
    </div>
</body>

</html>