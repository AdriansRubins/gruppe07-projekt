<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/headerstyle.css">
        <link rel="stylesheet" href="./css/footerstyle.css">
        <title>Auto-care!</title>

    </head>
    <body>
        <?php $currentPage = 'index'?>
        <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fa fa-bars"></i>
                </label>
                <label class="logo">Auto-care!</label>
                <ul>
                    <li><a class="<?php echo $currentPage == 'index' ? 'active' : '' ?>" href="index.php">Startseite</a></li>
                    <li><a class="<?php echo $currentPage == 'leistungen' ? 'active' : '' ?>" href="./php/pages/leistungen.php">Leistungen</a></li>
                    <li><a class="<?php echo $currentPage == 'autos' ? 'active' : '' ?>" href="./php/pages/autos.php">Autos</a></li>
                    <li><a class="<?php echo $currentPage == 'kontakt' ? 'active' : '' ?>" href="php/pages/kontakt.php">Kontakt</a></li>

                </ul>
         </nav>

        <br>

        <div class="servicegrid">
            <div id="showcase">
                <h1 id="exp">Explore-Cars</h1>
            </div>
        </div>

        <div class="wrapper">
                <div class="bottom-layer">
                    <div class="div left"></div>
                    <div class="div right"></div>

                </div>
                <div class="top-layer">
                    <div class="texti">
                        <div class="FromLeft"><h2 class="about">About</h2></div>
                        <div class="FromRight"><h2 class="period">Us</h2></div>
                    </div>
                </div>
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

        <?php include('./php/templates/datenschutz.php');?>
        <?php include('./php/templates/impressum.php');?>

        <div id="footer">
            <footer>
                <div class="footer-content">
                    <h3 class="car-care">Auto-care!</h3>

                    <p class="autodealder">The only auto dealer in Duale Hochschule Baden-Württemberg Mosbach Campus Bad Mergentheim</p>

                    <ul class="socials">
                        <li><i class="fa fa-twitter"></i></li>
                        <li><i class="fa fa-instagram"></i></li>
                    </ul>
                </div>
                <div class="footer-bottom">
                    <p>copyright &copy;2022 Auto-Care. designed by <span>Group 7</span></p>
                    <div class="privacy">
                        <a href="#impressum" class="impressum">Impressum</a> |
                        <a href="#datenschutz" class="datenschutz">Datenschutz</a>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>


