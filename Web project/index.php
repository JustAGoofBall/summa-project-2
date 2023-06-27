<?php
include 'php/connection.php';
session_start();

if (isset($_SESSION['email'])) {
    header("Location: home.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && isset($_POST['wachtwoord'])) {
    $dsn = "mysql:host=$server;port=$port;dbname=$dbname;";
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    try {
        $connection = new PDO($dsn, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM gebruikerstabel WHERE Email = ? AND wachtwoord = ?";
        $statement = $connection->prepare($sql);
        $statement->execute([$email, $wachtwoord]);

        $count = $statement->rowCount();
        if ($count > 0) {
            $_SESSION['email'] = $email;
            header("Location: home.php");
            exit();
        } else {
            echo '<script> alert("Vul een juiste e-mail of wachtwoord") </script>';
        }
    } catch (PDOException $message) {
        echo "Error: " . $message->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/CSS" href="CSS/login.css">

<head>
    <title>Login</title>
    <img src="Img/GroenLinks_logo.png" alt="">
</head>

<body>
    <div class="card">
            <h1>Inloggen</h1>        
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                <label for="wachtwoord">Wachtwoord:</label>
                <input type="password" id="wachtwoord" name="wachtwoord" required>
                <button type="submit" name="login">Login</button>
            </form>
            <a href="create_account.php" class="create-account"><button class="Acc">Create Account</button></a>
    </div>
</body>

</html>