<?php
include 'php/connection.php';
$dsn = "mysql:host=$server;port=$port;dbname=$dbname";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $adres = $_POST['adres'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $woonplaats = $_POST['woonplaats'];
    $wachtwoord = $_POST['wachtwoord'];

    try {
        $connection = new PDO($dsn, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT COUNT(*) FROM gebruikerstabel WHERE email = ?";
        $statement = $connection->prepare($sql);
        $statement->execute([$email]);
        $count = $statement->fetchColumn();

        if ($count > 0) {
            echo '<script> alert("Dit e-mailadres is al in gebruik, gebruik een ander e-mailadres.") </script>';
        } else {
            $sql = "INSERT INTO gebruikerstabel (voornaam, achternaam, adres, email, telefoonnummer, woonplaats, wachtwoord) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $statement = $connection->prepare($sql);
            $statement->execute([$naam, $achternaam, $adres, $email, $telefoonnummer, $woonplaats, $wachtwoord]);
            echo '<script> alert("Je hebt je account aangemaakt") </script>';
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/CSS" href="CSS/login.css">

<head>
    <title>Registreer gebruiker</title>
    <img src="Img/GroenLinks_logo.png" alt="">
</head>

<body>
    <div class="card">
        <h1>Registreer gebruiker</h1>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="voornaam">Voornaam:</label>
            <input type="text" id="voornaam" name="voornaam" required>

            <label for="achternaam">Achternaam:</label>
            <input type="text" id="achternaam" name="achternaam" required>

            <label for="adres">Adres:</label>
            <input type="text" id="adres" name="adres" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefoonnummer">Telefoonnummer:</label>
            <input type="tel" id="telefoonnummer" name="telefoonnummer" required>

            <label for="woonplaats">Woonplaats:</label>
            <input type="text" id="woonplaats" name="woonplaats" required>

            <label for="wachtwoord">Wachtwoord:</label>
            <input type="password" id="wachtwoord" name="wachtwoord" required>

            <button type="submit" name="create" class="button">Aanmaken</button>
        </form>
        <a href="index.php"><button>Ga terug</button></a>
    </div>
</body>

</html>