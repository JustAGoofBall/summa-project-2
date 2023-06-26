<?php
include 'php/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naam = $_POST['username'];
    $wachtwoord = $_POST['password'];

    try {
        $connection = new PDO($connectionString, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT COUNT(*) FROM gebruikerstabel WHERE Voornaam = ?";
        $statement = $connection->prepare($sql);
        $statement->execute([$naam]);
        $count = $statement->fetchColumn();

        if ($count > 0) {
            echo "Deze gebruikersnaam is al in gebruik, gebruik een andere gebruikersnaam.";
        } else {
            $sql = "INSERT INTO playertabel (Voornaam, wachtwoord) VALUES (?, ?)";
            $statement = $connection->prepare($sql);
            $statement->execute([$naam, $wachtwoord]);
            echo "Your account has successfully been created.";
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
    <div class="parent">
        <div>
            <h1>Registreer gebruiker</h1>
        </div>
        <div>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="voornaam">Voornaam:</label>
                <input type="text" id="voornaam" name="voornaam" required>

                <label for="achternaam">Achternaam:</label>
                <input type="text" id="achternaam" name="achternaam" required>

                <label for="adres">Adres:</label>
                <input type="text" id="adres" name="adres" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="telefoonnummer">telefoonnummer:</label>
                <input type="tel" id="telefoonnummer" name="telefoonnummer" required>

                <label for="woonplaats">Woonplaats:</label>
                <input type="text" id="woonplaats" name="woonplaats" required>

                <label for="wachtwoord">Wachtwoord:</label>
                <input type="password" id="wachtwoord" name="wachtwoord" required>

                <button type="submit" name="create" class="button">Create</button>
            </form>
        </div>
        <div>
            <a href="index.php"><button>Ga terug</button></a>
        </div>
    </div>
</body>

</html>