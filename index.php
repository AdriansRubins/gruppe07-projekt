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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/headerstyle.css">
    <link rel="stylesheet" href="./css/footerstyle.css">
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
            <li><a  href="index.php"><button class="<?php echo $currentPage == 'index' ? 'active' : '' ?>">Startseite</button></a></li>
            <li><a  href="./php/pages/leistungen.php"><button class="<?php echo $currentPage == 'leistungen' ? 'active' : '' ?>">Leistungen</button></a></li>
            <li><a  href="./php/pages/autos.php"><button class="<?php echo $currentPage == 'autos' ? 'active' : '' ?>">Autos</button></a></li>
            <li><a  href="./php/forms/kontakt.php"><button class="<?php echo $currentPage == 'kontakt' ? 'active' : '' ?>">Kontakt</button></a></li>

        </ul>
    </nav>

  

<br>
<div class="servicegrid">
    <div id="showcase">
        <h1 id="exp">Explore-</h1>
        <h1 id="cars">Cars!</h1>
    </div>
    <div id="about2">
        <span id="us2">About us!</span>
    </div>
    <div id="des">
        <p id="text">
            Auto-care is a fictive website created by Group 7 TINF21 for Web Engineering1 Project, Fall Winter Semester 2021.
            Auto-care deals everything related to automobiles. With a variety of new and second-hand cars, Auto-care has
            been one of the leading Auto dealers in Duale Hochschule Mosbach Baden-Württemberg Campus Bad Mergentheim.
            We provides quite a few services to keep your vehicle retain texture and smooth functioning of mechanical parts.
            Enjoy the webiste tour!
        </p>

    </div>
    <div id="footer">
        
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
            <a href="./php/pages/impressum.php" class="impressum">Impressum</a> |
            <a href="./php/pages/datenschutz.php" class="datenschutz">Datenschutz</a>
        </div>
    </div>
</footer>
    </div>

</div>

</body>
</html>


