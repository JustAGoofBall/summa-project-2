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
    <main class="mainitto">

        <form action="" method="POST" id="Form">

        <label for="">Voornaam:</label>    
        <input type="text" name="Voornaam" required>
        
        <label for="">Achternaam:</label>
        <input type="text" name="Achternaam" required >
  
        <label for="">e-mail:</label>
        <input type="email" name="e-mail" required>

        <label for="">Bericht:</label>
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
                <li><a href=""><i class="fa-brands fa-instagram"></a></i></li>
                <li><a href=""><i class="fa-brands fa-facebook"></a></i></li>
                <li><a href=""><i class="fa-brands fa-twitter"></a></i></li>
            </ul>
        
        
        </div>
    </footer>
</body>

</html>