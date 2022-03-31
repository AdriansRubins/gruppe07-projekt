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
    <link rel="stylesheet" href="../../css/footerstyle.css">
    <link rel="stylesheet" href="../../css/datenschutzUndImpressum.css">
    <link rel="stylesheet" href="../../css/headerstyle.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Auto-care!</title>

</head>
<body>
<?php
    $currentPage='';
    include ('../templates/header.php');
?>
<br>
<div id="impressum" class="overlay">
    <div class="popup">
        <a class="close" href="#">&times;</a>
        <h1>Impressum</h1>

        <h2>Angaben gem&auml;&szlig; &sect; 5 TMG</h2>
        <p>Auto Care<br />
            Werkstattstra&szlig;e 1<br />
            97980 Bad Mergentheim</p>
        <br>
        <h2>Kontakt</h2>
        <p>Telefon: 012345689<br />
            E-Mail: jer.greis.21@lehre.mosbach.dhbw.de</p>
        <br>
        <h2>Umsatzsteuer:</h2>
        <p>Umsatzsteuer-<br>
            Identifikationsnummer gemäß §27 a Umsatzsteuergesetz:<br>
            DE123456789</p>
        <br>
        <p>Quelle: <a href="https://www.e-recht24.de">e-recht24.de</a></p>
    </div>
</div>
<?php
    include ('../templates/footer.php');
?>
</body>
</html>