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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $adres = $_POST['adres'];
        $telefoonnummer = $_POST['telefoonnummer'];
        $wachtwoord = $_POST['wachtwoord'];
        $woonplaats = $_POST['woonplaats'];

        $updateSql = "UPDATE gebruikerstabel SET Voornaam = ?, Achternaam = ?, Adres = ?, Telefoonnummer = ?, Wachtwoord = ?, Woonplaats = ? WHERE Email = ?";
        $updateStatement = $connection->prepare($updateSql);
        $updateStatement->execute([$voornaam, $achternaam, $adres, $telefoonnummer, $wachtwoord, $woonplaats, $email]);

        header("Location: profiel.php");
        exit();
    }
    $sql = "SELECT * FROM gebruikerstabel WHERE Email = ?";
    $statement = $connection->prepare($sql);
    $statement->execute([$email]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $message) {
    echo "Error: " . $message->getMessage();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Profiel</title>
</head>

<body>
    <h1>Update Profiel</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="voornaam">Voornaam:</label>
        <input type="text" id="voornaam" name="voornaam" value="<?php echo $user['Voornaam']; ?>" required><br>

        <label for="achternaam">Achternaam:</label>
        <input type="text" id="achternaam" name="achternaam" value="<?php echo $user['Achternaam']; ?>" required><br>

        <label for="adres">Adres:</label>
        <input type="text" id="adres" name="adres" value="<?php echo $user['Adres']; ?>" required><br>

        <label for="telefoonnummer">Telefoonnummer:</label>
        <input type="text" id="telefoonnummer" name="telefoonnummer" value="<?php echo $user['Telefoonnummer']; ?>" required><br>

        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" id="wachtwoord" name="wachtwoord" value="<?php echo $user['Wachtwoord']; ?>" required><br>

        <label for="woonplaats">Woonplaats:</label>
        <input type="text" id="woonplaats" name="woonplaats" value="<?php echo $user['Woonplaats']; ?>" required><br>

        <button type="submit" name="update">Update</button>
    </form>
    <a href="home.php">Ga terug naar Home</a>
    <a href="profiel.php">Ga terug naar profiel</a>
</body>

</html>