<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/indexstyles.css">
    <link rel="stylesheet" href="../../css/footerstyles.css">
    <title>Auto-care!</title>
</head>
    <body>
        <?php
        $currentPage='index';
        include ('./php/templates/header.php');
        ?>
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
            <?php include ('./php/templates/footer.php'); ?>
        </div>
    </body>
</html>