<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Play&display=swap" rel="stylesheet">
    <link href="stylesheet" href="../../assets/fonts/fontawesome-free-6.1.0-web/css/.brands.css">
    <link rel="stylesheet" href="../../css/headerstyle.css">
    <link rel="stylesheet" href="../../css/footerstyle.css">
    <link rel="stylesheet" href="../../css/kontaktstyle.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Auto-care!</title>

</head>
<body>
<?php
    $currentPage = 'kontakt';
    include('../templates/header.php');
?>
<br>
<div class="kontaktgrid">
    <div class="heading">
        <h1>Get in touch!</h1>
    </div>
    <div class="form">
        <form action="../forms/answer.php" method="post">
            <h1>Konkaktformular</h1>
            <label for="vn_vorname">Vorname:</label><br>
            <input id="vn_vorname" class="inputfield" type="text" placeholder="Vorname" name="vn_vorname" required><br>
            <label for="nn_nachname">Nachname:</label><br>
            <input id="nn_nachname" class="inputfield" type="text" placeholder="Nachname" name="nn_nachname" required><br>
            <label for="mail">Mailadresse:</label><br>
            <input id="mail" class="inputfield" type="email" placeholder="Mailadresse" name="mail" required><br>
            <label for="telefon">Telefon:</label><br>
            <input id="telefon" class="inputfield" type="text" placeholder="Telefon" name="telefon"><br>
            <label for="nachricht">Ihre Nachricht:</label><br>
            <textarea id="nachricht" class="inputfield" placeholder="Ihre Nachricht" required name="nachricht"></textarea><br>
            <p id="nachricht"><input type="checkbox" required>Ich erkl채re mich damit einverstanden, dass meine personenbezogenen Daten nur zum Zwecke
                der Bearbeitung im Rahmen des Kontaktformulars verarbeitet und gespeichert werden.
                Die Daten werden nur f체r die hier aufgef체hrten Zwecke verwendet und nicht an Dritte weitergegeben.
            </p>
            <button class="inputfield" type="submit">Absenden</button><button class="inputfield" type="reset">Zur체cksetzen</button>
        </form>
    </div>
    <div class="helper">
        <h1 id="headinghelper">Ansprechpartner</h1>
        <img class="pictures" src="../../assets/images/1.jpg">
        <img class="pictures" src="../../assets/images/2.jpg">
        <div class="Textposition">
            <p>
            <ul class="text">
                <h3 class="text">7239202</h3>
                <li>Tel: 01654398936</li>
                <li>Email: </li>
            </ul>
            </p>
            <p>
            <ul>
                <h3 class="text">7239202</h3>
                <li>Tel: 01654398936</li>
                <li>Email: </li>
            </ul>
            </p>
        </div>
        <img class="pictures" src="../../assets/images/3.jpg">
        <img class="pictures" src="../../assets/images/4.jpg">
        <div class="Textposition">
            <p>
            <ul class="text">
                <h3 class="text">7239202</h3>
                <li>Tel: 01654398936</li>
                <li>Email: </li>
            </ul>
            </p>
            <p>
            <ul>
                <h3 class="text">7239202</h3>
                <li>Tel: 01654398936</li>
                <li>Email: </li>
            </ul>
            </p>
        </div>
    </div>
</div>
<?php
    include('../templates/footer.php');
?>
</body>
</html>


