<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word lid</title>
    <link rel="stylesheet" type="text/CSS" href="CSS/alles.css">
    <link rel="stylesheet" type="text/CSS" href="CSS/word_lid.css">

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
                <li><a href="Word_lid.php">Word lid</a></li>
                <li><a href="contact_us.php">Contact us</a></li>
            </ul>
        </nav>

    </header>
    <main class="main1">
        <div class="container3">
            <h1>SLUIT JE AAN BIJ ONZE BEWEGING!</h1>
        </div>
         
        <h2 id="persoon">Persoonsgegevens:</h2>
        <form action="Word_lid.php" method="POST" id="Form1">

            <label for="Voornaam">Voornaam:</label>
            <input type="text" name="Voornaam" id="Voornaam" required>

            <label for="Achternaam">Achternaam:</label>
            <input type="text" name="Achternaam" id="Achternaam" required>

            <label for="Geboortedatum">Geboortedatum:</label>
            <input type="date" id="Geboortedatum" required>

            <label for="Adres">Adres:</label>
            <input type="text" id="Adres" required>

            <label for="Postcode">Postcode:</label>
            <input type="text" id="Postcode" required>

            <label for="Woonplaats">Woonplaats:</label>
            <input type="text" id="Woonplaats" required>

            <label for="email">e-mail:</label>
            <input type="email" id="email" required>

            <label for="Telefoonummer">Telefoonummer:</label>
            <input type="number" id="Telefoonummer" required>

            <label for="Contributie">Contributie:</label>
            <input type="number" id="Contributie" required>

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