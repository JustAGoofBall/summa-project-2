<?php include 'php/connection.php' ?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroenLinks</title>
    <link rel="stylesheet" type="text/CSS" href="CSS/alles.css">
<script src="JS/Alles.js"></script>
    <script src="https://kit.fontawesome.com/a4d79bb58d.js" crossorigin="anonymous"></script>

</head>

<body>
<div class="popup-container" id="popup1" >
    <div class="popup">
        <div class="close">
        <i class="fa-sharp fa-regular fa-xmark" onclick="togglepopup()" ></i>
        </div>
        <img src="Img/boeren.jpg" alt="">
    <h1>Popup</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, fugit placeat minus accusamus quos, sed dolorum autem blanditiis, 
        eius velit maiores. Accusamus dolorem ut hic similique quas. Praesentium, impedit amet!</p>
    </div>
    </div>
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
    
    <main>




        <h1>DE GROOTSTE LINKSE PARTIJ IN <span>NEDERLAND</span></h1>
        <div class="container">
            <img src="Img/jesse_klaver_duimpje.jpg" alt="">
            <img src="Img/GroenLinks_Kissing.jpg" alt="">
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="nieuws">
            <h2>NIEUWS</h2>
        </div>
        <div class="container1">
            <div class="card" >
                <h2>Kleinere bierbrouwers hebben het zwaar door hoge kosten
                </h2>
                <br>
                <img src="Img/boeren.jpg" alt="">
                <button onclick="togglepopup()">Lees meer</button>
            </div>

            <div class="card">
                <h2>Jeugdtrainer Koninklijke HFC op non-actief na meldingen grensoverschrijdend gedrag</h2>
                <img src="Img/jeugdtraining.jpg" alt="">
                <button>Lees meer</button>
            </div>

            <div class="card">
                <h2>Resten in graf Leipzig inderdaad van Rijksdagbrandstichter Van der Lubbe</h2>
                <img src="Img/zwart-wit.jpg" alt="">
                <button>Lees meer</button>
            </div>
            <div class="card">
                <h2>Ziekmelden om extreme hooikoorts, patiënten snakken naar regen</h2>
                <img src="Img/vrouw_snuiten.jpg" alt="">
                <button>Lees meer</button>
            </div>
        </div>
        <div class="LEEES">
            <button class="Lees">LEES MEER</button>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="standpunten">
            <h2>HIER STAAN WIJ VOOR</h2>
        </div>
        <div class="container2">
            <div class="card">
                <img src="Img/protest_3man.jpg" alt="">
                <h2>Groene energie opwekken</h2>
            </div>
            <div class="card">
                <img src="Img/2_mensen.jpg" alt="">

                <h2>Lagere huur prijzen</h2>
            </div>
            <div class="card">
                <img src="Img/protest.jpg" alt="">
                <h2>Grote vervuilers aanpakken!</h2>
            </div>
        </div>
        <div class="LEEES">
            <button class="Lees">Bekijk hier al onze standpunten</button>
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
                <li><a href="https://www.instagram.com/groenlinks/"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/groenlinks/"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/groenlinks"><i class="fa-brands fa-twitter"></i></a></li>
            </ul>
        </div>
    </footer>
</body>

</html>