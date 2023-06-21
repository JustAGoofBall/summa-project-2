<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word lid</title>
    <link rel="stylesheet" type="text/CSS" href="CSS/alles.css">
    <script src="JS/Alles.js"></script>
    <script src="https://kit.fontawesome.com/a4d79bb58d.js" crossorigin="anonymous"></script>
</head>

<body>
<header>
        
        <a href="home.php"><img src="Img/GroenLinks_logo.png" alt="" class="logo"></a>
        <nav >
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
            <img src="Img/groepleden.jpg" alt="">
            <h1>SLUIT JE AAN BIJ ONZE BEWEGING!</h1>
            <div class="card">
                <p>
                    Wij weten dat het kan: een eerlijk, groen en zorgzaam Nederland.
                    Een inclusieve samenleving, waarin iedereen niet alleen gelijkwaardig is,
                    maar ook zo wordt behandeld. Voor
                    een land waarin de hoop het wint van de angst, de vernieuwing van de status quo, en eerlijk delen van egoïsme.
                </p>
            </div>
        </div>

        <h2>Persoonsgegevens:</h2>
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