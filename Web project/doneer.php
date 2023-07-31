<?php
include 'php/connection.php';

$input = [];
$statement1 = $conn->query("SELECT Voornaam, Achternaam, Bedrag FROM donatietabel ORDER BY Bedrag DESC LIMIT 5");
$input = $statement1->fetchAll(PDO::FETCH_ASSOC);

$statement2 = $conn->query("SELECT Voornaam, Achternaam, Bedrag FROM donatietabel ORDER BY DonatieDatum	 DESC LIMIT 5");
$input_recent = $statement2->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Voornaam'])) {
        $voornaam = $_POST['Voornaam'];
    }

    if (isset($_POST['Achternaam'])) {
        $achternaam = $_POST['Achternaam'];
    }

    if (isset($_POST['Bedrag'])) {
        $bedrag = $_POST['Bedrag'];
    }

    if ($bedrag > 0) {
        $query = "SELECT Bedrag FROM donatietabel WHERE Voornaam = :voornaam AND Achternaam = :achternaam";
        $statement = $conn->prepare($query);
        $statement->bindParam(':voornaam', $voornaam);
        $statement->bindParam(':achternaam', $achternaam);
        $statement->execute();
        $existingDonation = $statement->fetch(PDO::FETCH_ASSOC);

        if ($existingDonation) {
            $bedrag += $existingDonation['Bedrag'];
            $updateQuery = "UPDATE donatietabel SET Bedrag = :bedrag WHERE Voornaam = :voornaam AND Achternaam = :achternaam";
            $updateStatement = $conn->prepare($updateQuery);
            $updateStatement->bindParam(':bedrag', $bedrag);
            $updateStatement->bindParam(':voornaam', $voornaam);
            $updateStatement->bindParam(':achternaam', $achternaam);
            $updateStatement->execute();
        } else {
            $insertQuery = "INSERT INTO donatietabel (Achternaam, Bedrag, Voornaam) VALUES (:achternaam, :bedrag, :voornaam)";
            $insertStatement = $conn->prepare($insertQuery);
            $insertStatement->bindParam(':achternaam', $achternaam);
            $insertStatement->bindParam(':bedrag', $bedrag);
            $insertStatement->bindParam(':voornaam', $voornaam);
            $insertStatement->execute();
        }
    }
}

if (isset($_POST['submit'])) {
    if ($bedrag > 0) {
        header('location: IsGelukt.php');
    } else {
        header('location: Error.php');
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doneer</title>
    <link rel="stylesheet" type="text/CSS" href="CSS/alles.css">
    <link rel="stylesheet" type="text/CSS" href="CSS/doneer.css">
    <script src="JS/Alles.js"></script>
    <script src="https://kit.fontawesome.com/a4d79bb58d.js" crossorigin="anonymous"></script>
</head>

<body id="body">
    <header>
        <a href="home.php"><img src="Img/GroenLinks_logo.png" alt="" class="logo"></a>
        <nav>
            <input type="checkbox" id="check" onchange='handleChange(this);'>
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li><a href="standpunten.php" class="active">Standpunten</a></li>
                <li><a href="leden.php">Onze leden</a></li>
                <li><a href="doneer.php">Doneer</a></li>
                <li><a href="contact_us.php">Contact us</a></li>
                <li><a href="uitloggen.php">Uitloggen</a></li>
                <li><a href="profiel.php"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container4">
            <div class="Img1">
                <img src="Img/protest_3man.jpg" alt="">
            </div>
            <div>
                <h1>DONEER AAN GROENLINKS</h1>
                <form method="POST" action="doneer.php" id="Form2">
                    <label for="Voornaam">Voornaam</label>
                    <input type="text" name="Voornaam" id="Voornaam" required>
                    <label for="Achternaam">Achternaam</label>
                    <input type="text" name="Achternaam" id="Achternaam" required>
                    <label for="Bedrag">Bedrag</label>
                    <input type="number" name="Bedrag" id="Bedrag" required>
                    <br>
                    <input type="submit" class="btn" name="submit">
                    <br>
                </form>
                <div class="Donators">
                    <h2>TOP 5 DONATORS</h2>
                </div>
                <div class="container6">
                    <table class="myTable">
                        <thead>
                            <tr>
                                <th>Naam</th>
                                <th>Bedrag</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($input as $inputs) : ?>
                                <tr>
                                    <td><?php echo $inputs['Voornaam'], ' ', $inputs['Achternaam']; ?></td>
                                    <td><?php echo '€', $inputs['Bedrag'], ',-'; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div><br>
                <div class="Donators">
                    <h2>Meest recente donaties</h2>
                </div>
                <div class="container6">
                    <table class="myTable">
                        <thead>
                            <tr>
                                <th>Naam</th>
                                <th>Bedrag</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($input_recent as $input) : ?>
                                <tr>
                                    <td><?php echo $input['Voornaam'], ' ', $input['Achternaam']; ?></td>
                                    <td><?php echo '€', $input['Bedrag'], ',-'; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <div class="footer-container">
        <footer>
            <div>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="Word_lid.php">Word Lid</a></li>
                    <li><a href="doneer.php">Doneer</a></li>
                </ul>
            </div>

            <div>
                <ul>
                    <li><a href="leden.php">Onze Leden</a></li>
                    <li><a href="standpunten.php">Standpunten</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                </ul>
            </div>

            <div>
                <ul>
                    <li>Adres:<br><a href="https://www.google.com/maps/search/St+Jacobsstraat+12,+3511+BS+Utrecht">St Jacobsstraat 12, 3511 BS Utrecht</a></li>
                    <li>Telefoonnummer:<br><a href="tel:+31302399900">(030) 2 39 99 00</a></li>
                </ul>
            </div>

            <div>
                <ul>
                    <li><a href="https://www.instagram.com/groenlinks/"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/groenlinks/"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/groenlinks"><i class="fa-brands fa-twitter"></i></a></li>
                </ul>
            </div>
        </footer>
</body>

</html>