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
    <title>Auto-care!</title>

</head>
<body>
<header>

    <h1 id="company">Auto-Care!</h1>
    <nav>

        <ul class="nav__links">
            <li><a  href="index.php"><button class="<?php echo $currentPage == 'index' ? 'active' : '' ?>">Startseite</button></a></li>
            <li><a  href="leistungen.php"><button class="<?php echo $currentPage == 'leistungen' ? 'active' : '' ?>">Leistungen</button></a></li>
            <li><a  href="autos.php"><button class="<?php echo $currentPage == 'autos' ? 'active' : '' ?>">Autos</button></a></li>
            <li><a  href="./php/forms/kontakt.php"><button class="<?php echo $currentPage == 'kontakt' ? 'active' : '' ?>">Kontakt</button></a></li>
        </ul>
    </nav>

</header>

  
