<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/CSS" href="CSS/home.css">
    <script src="https://kit.fontawesome.com/a4d79bb58d.js" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <nav>
            <a href="home.php"><img src="Img/GroenLinks_logo.png" alt=""></a>
            <ul>
                <li><a href="standpunten.php">Standpunten</a></li>
                <li><a href="leden.php">Onze leden</a></li>
                <li><a href="doneer.php">Doneer</a></li>
                <li><a href="Word_lid.php">Word lid</a></li>
                <li><a href="contact_us.php">Contact us</a></li>
            </ul>
        </nav>
    </header>
    <main class="mainitto">

        <form action="contact_us.php" method="POST" id="Form">

            <label for="Voornaam">Voornaam:</label>
            <input type="text" name="Voornaam" id="Voornaam" required>

            <label for="Achternaam">Achternaam:</label>
            <input type="text" name="Achternaam" id="Achternaam" required>

            <label for="e-mail">e-mail:</label>
            <input type="email" name="e-mail" id="e-mail" required>


            <label for="bericht">Bericht:</label>
            <textarea name="bericht" id="bericht" cols="30" rows="10" required></textarea>
            <input type="submit" class="btn">
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
                <li><a href="">Adres</a></li>
                <li><a href="">Telefoonummer</a></li>
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