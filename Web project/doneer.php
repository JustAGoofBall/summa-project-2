<?php
include 'php/connection.php';

$input = [];
$statement1 = $conn->query("SELECT Voornaam, Achternaam, Bedrag FROM donatietabel ORDER BY Bedrag DESC LIMIT 5");
    $input = $statement1->fetchAll(PDO::FETCH_ASSOC);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Voornaam'])) {
        $voornaam = $_POST['Voornaam'];}

        if (isset($_POST['Achternaam'])) {
            $achternaam = $_POST['Achternaam'];}

            if (isset($_POST['Bedrag'])) {
                $bedrag = $_POST['Bedrag'];}

    $query = "INSERT INTO donatietabel (Achternaam, Bedrag, Voornaam) VALUES (:achternaam, :bedrag, :voornaam)";

    $statement = $conn->prepare($query);
    $statement->bindParam(':achternaam', $achternaam);
    $statement->bindParam(':bedrag', $bedrag);
    $statement->bindParam(':voornaam', $voornaam);
    $statement->execute();

    
    header('Location: doneer.php');
    exit();
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
            <div class="Img1">
                <img src="Img/protest_3man.jpg" alt="">
            </div>
            <div>
                <h1>DONEER AAN GROENLINKS</h1>
                <form method="POST" action="doneer.php" id="Form2">

                    <label for="">Voornaam</label>
                    <input type="text" name="Voornaam" required>

                    <label for="">Achternaam</label>
                    <input type="text" name="Achternaam" required>

                    <label for="">Bedrag</label>
                    <input type="number" name="Bedrag" required>
                    <br>

                    <input type="submit" class="btn">
                    <?php
                    if (isset($statement)) {
                        if ($statement) {
                            echo "Payment successful.";
                        } else {
                            echo "Error with payment.";
                        }
                    }
                    ?>
                    <br>
                 
                </form>
                <div class="container6">
                <h2>TOP DONATORS</h2>

                <table class="myTable">

                    <thead>
                        <tr>
                            <th>Voornaam</th>
                            <th>Achternaam</th>
                            <th>Bedrag</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($input as $inputs): ?>
                            <tr>
                                <td><?php echo $inputs['Voornaam']; ?></td>
                                <td><?php echo $inputs['Achternaam']; ?></td>
                                <td><?php echo $inputs['Bedrag']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
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