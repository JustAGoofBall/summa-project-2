<?php
include 'php/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $voornaam = $_POST['Voornaam'];
    $achternaam = $_POST['Achternaam'];
    $bedrag = $_POST['Bedrag'];

    $query = "INSERT INTO donatietabel (Achternaam, Bedrag, Voornaam) VALUES (:achternaam, :bedrag, :voornaam)";

    $statement = $conn->prepare($query);
    $statement->bindParam(':achternaam', $achternaam);
    $statement->bindParam(':bedrag', $bedrag);
    $statement->bindParam(':voornaam', $voornaam);
    $statement->execute();
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="CSS/doneer.css">
    <title>doneer</title>
    <link rel="stylesheet" type="text/CSS" href="CSS/home.css">
    <script src="https://kit.fontawesome.com/a4d79bb58d.js" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <nav>
            <ul>
                <a href="home.php"><img src="Img/GroenLinks_logo.png" alt=""></a>
                <li><a href="standpunten.php">Standpunten</a></li>
                <li><a href="leden.php">Onze leden</a></li>
                <li><a href="doneer.php">Doneer</a></li>
                <li><a href="Word_lid.php">Word lid</a></li>
                <li><a href="contact_us.php">Contact us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container4">
            <div>
                <img src="Img/protest_3man.jpg" alt="">
            </div>
            <div>
                <h1>DONEER AAN GROENLINKS</h1>
                <form method="post" action="doneer.php" id="Form2">

                    <label for="">Voornaam</label>
                    <input type="text" name="Voornaam">

                    <label for="">Achternaam</label>
                    <input type="text" name="Achternaam">

                    <label for="">Bedrag</label>
                    <input type="number" name="Bedrag">
                    <br>

                    <input type="submit" class="btn">
                    <?php
                    if ($statement) {
                        echo "Payment succesfull.";
                    } else {
                        echo "Error with payment.";
                    }
                    ?>
                </form>
            </div>

        </div>
    </main>
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
                <li><a href="">Adres</a></li>
                <li><a href="">Telefoonummer</a></li>
            </ul>
        </div>

        <div>
            <ul>
                <li><a href="https://www.instagram.com/groenlinks/"><i class="fa-brands fa-instagram"></a></i></li>
                <li><a href="https://www.facebook.com/groenlinks/"><i class="fa-brands fa-facebook"></a></i></li>
                <li><a href="https://twitter.com/groenlinks"><i class="fa-brands fa-twitter"></a></i></li>
            </ul>


        </div>
    </footer>
</body>

</html>