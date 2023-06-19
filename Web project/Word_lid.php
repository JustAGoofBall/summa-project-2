<?php
    
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="CSS/word_lid.css">
    <title>Word lid</title>
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
        <form action="" method="POST" id="Form1">
            
        <label for="">Voornaam:</label>
        <input type="text"  name="Voornaam" required>

        <label for="">Achternaam:</label>
        <input type="text" name="Achternaam" required>

        <label for="">Geboortedatum:</label>
        <input type="date" required>

        <label for="">Adres:</label>
        <input type="text" required>

        <label for="">Postcode:</label>
        <input type="text" required>

        <label for="">Woonplaats:</label>
        <input type="text" required>

        <label for="email">e-mail:</label>
        <input type="email" required>

        <label for="">Telefoonummer:</label>
        <input type="number" required>

        <label for="">Contributie:</label>
        <input type="number" required>

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
                <li><a href=""><i class="fa-brands fa-instagram"></a></i></li>
                <li><a href=""><i class="fa-brands fa-facebook"></a></i></li>
                <li><a href=""><i class="fa-brands fa-twitter"></a></i></li>
            </ul>
        
        
        </div>
    </footer>
</body>

</html>