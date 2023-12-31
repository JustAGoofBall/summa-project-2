<?php
if (isset($_POST['submit'])) {
    $submit = $_POST['submit'];

        if($submit)
        {
            echo '<script> alert("Dank u voor u bericht"); </script>';
        }
        else{
            echo '<script> alert("error"); </script>';

        }
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/CSS" href="CSS/alles.css">
    <link rel="stylesheet" type="text/CSS" href="CSS/contact_us.css">
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
    <main class="mainitto">
        <h1>Contact Us</h1>
        <form action="contact_us.php" method="POST" id="Form">
            <label for="Voornaam">Voornaam:</label>
            <input type="text" name="Voornaam" id="Voornaam" required>

            <label for="Achternaam">Achternaam:</label>
            <input type="text" name="Achternaam" id="Achternaam" required>

            <label for="e-mail">e-mail:</label>
            <input type="email" name="e-mail" id="e-mail" required>

            <label for="bericht">Bericht:</label>
            <textarea name="bericht" id="bericht" cols="30" rows="10" required></textarea>

            <input type="submit" class="btn" name="submit">
        </form>
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