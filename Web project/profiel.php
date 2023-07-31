<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

include 'php/connection.php';

try {
    $dsn = "mysql:host=$server;port=$port;dbname=$dbname;";
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $email = $_SESSION['email'];

//Session , met session kun je variabelen van een bepaalde user over heel de website gebruiken

    $sql = "SELECT * FROM gebruikerstabel WHERE Email = ?";
    $statement = $connection->prepare($sql);
    $statement->execute([$email]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    // === is een operator die blijft gelijk aan dezelfde data type een string of int bv. 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['delete'])) {
            $deleteSql = "DELETE FROM gebruikerstabel WHERE Email = ?";
            $deleteStatement = $connection->prepare($deleteSql);
            $deleteStatement->execute([$email]);

            session_destroy();
            header("Location: index.php");
            exit();
        }

        if (isset($_POST['update'])) {
            header("Location: update.php");
            exit();
        }
    }
} catch (PDOException $message) {
    echo "Error: " . $message->getMessage();
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/CSS" href="CSS/login.css">

<head>
    <title>Profiel</title>
</head>

<body>
    <div class="card">
        <h1>Profiel</h1>
        <h2>User Information</h2>
        <p>Email: <?php echo $user['Email']; ?></p>
        <p>Voornaam: <?php echo $user['Voornaam']; ?></p>
        <p>Achternaam: <?php echo $user['Achternaam']; ?></p>
        <p>Adres: <?php echo $user['Adres']; ?></p>
        <p>Telefoonnummer: <?php echo $user['Telefoonnummer']; ?></p>
        <p>Wachtwoord: <?php echo $user['Wachtwoord']; ?></p>
        <p>Woonplaats: <?php echo $user['Woonplaats']; ?></p>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <button type="submit" name="delete">Delete</button>
            <button type="submit" name="update">Update Data</button>
        </form>

        <br>

        <form action="home.php">
            <button type="submit">Go Back to Home</button>
        </form>
    </div>
</body>

</html>