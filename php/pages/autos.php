<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Play&display=swap" rel="stylesheet">
    <link href="stylesheet" href="../../assets/fonts/fontawesome-free-6.1.0-web/css/.brands.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/autosstyle.css">
    <link rel="stylesheet" href="../../css/footerstyle.css">
    <link rel="stylesheet" href="../../css/headerstyle.css">
    <title>Auto-care!</title>

</head>
<body>
<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>

        </label>
        <label class="logo">Auto-care!</label>
        <ul>
            <li><a  href="../../index.php"><button class="<?php echo $currentPage == 'index' ? 'active' : '' ?>">Startseite</button></a></li>
            <li><a  href="./leistungen.php"><button class="<?php echo $currentPage == 'leistungen' ? 'active' : '' ?>">Leistungen</button></a></li>
            <li><a  href="./autos.php"><button class="<?php echo $currentPage == 'autos' ? 'active' : '' ?>">Autos</button></a></li>
            <li><a  href="../forms/kontakt.php"><button class="<?php echo $currentPage == 'kontakt' ? 'active' : '' ?>">Kontakt</button></a></li>

        </ul>
    </nav>

  

<br>
<div class="topbox">
    <h1 id="Autos"> Autos</h1>
</div>

<div class="car1">

    <div class="car1-name">
        <h2 id="lamborghiniName">Lamborghini Huracán LP610-4 Coupé</h2>
        <button>Buy Now</button>
    </div>
    <div class="car1-des">
        <p id="lamborghiniDes">
            The Huracán Coupé has been created for unprecedented performance.
            All the power and acceleration of a naturally aspirated V-10 engine,
            without giving up control or fun of driving. This is all thanks to the
            all-wheel drive system and the 7-speed Lamborghini Doppia Frizione (LDF) dual-clutch
            transmission, as well as the innovative Piattaforma Inerziale Lamborghini (LPI), created for
            accurate and real-time detection of all the chassis movements and for immediate
            adjustment of the car setup.
        </p>
    </div>
    <div class="car1-foto">
        <img id="lamborghiniFoto" src="../../assets/images/lamborghini.jpg">
    </div>
</div>

<div class="car2">

    <div class="car2-name">
        <h2 id="teslaModel3Name">Tesla Model 3</h2>
        <button>Buy Now</button>
    </div>
    <div class="car2-des">
        <p id="teslaDes">
            Model 3 comes with the option of dual motor all-wheel drive, 20”
            Überturbine Wheels and Performance Brakes for total control in all
            weather conditions. A carbon fiber spoiler improves stability at high speeds,
            all allowing Model 3 to accelerate from 0-60 mph* in as little as 3.1 seconds.
        </p>
    </div>
    <div class="car2-foto">
        <img id="teslaModel3" src="../../assets/images/teslaModel3.png">
    </div>

</div>

<div class="car3">

    <div class="car3-name">
        <h2 id="porscheName">Porsche 718 Cayman GT4 RS</h2>
        <button>Buy Now</button>
    </div>
    <div class="car3-des">
        <p id="porscheDes">
            The 718 Cayman GT4 RS is more than a sports car, it is a razor-sharp track
            tool with a design that comes straight from the circuit. Rational? Not always.
            Perfect? At all times. Just like the symbiosis between a track tool on the asphalt
            and the one on your wrist: the 718 Cayman GT4 RS Chronograph from Porsche Design,
            which is reserved exclusively for 718 Cayman GT4 RS owners. Like the 718 Cayman GT4 RS,
            the chronograph is also available with the Weissach Package.
        </p>
    </div>
    <div class="car3-foto">
        <img id="porscheFoto"src="../../assets/images/porsche.jpg">
    </div>

</div>

<footer>
    <div class="footer-content">
        <h3 class="car-care">Auto-care!</h3>

        <p class="autodealder">The only auto dealer in Duale Hochschule Baden-Württemberg Mosbach Campus Bad Mergentheim</p>

        <ul class="socials">
            <li><i class="fa fa-google-plus"></i></li>
            <li><i class="fa fa-facebook-f"></i></li>
            <li><i class="fa fa-twitter"></i></li>
            <li><i class="fa fa-pinterest"></i></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2022 Auto-Care. designed by <span>Group 7</span></p>
        <div class="privacy">
            <a href="./impressum.php" class="impressum">Impressum</a> |
            <a href="./datenschutz.php" class="datenschutz">Datenschutz</a>
        </div>
    </div>
</footer>

</body>
</html>





