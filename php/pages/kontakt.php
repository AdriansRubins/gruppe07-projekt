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
    <div class="wrapper2">
        <form action="../forms/answer.php" method="post">
        <div class="form">
            <br>
            <br>
            <h2 class="kontaktform" >Kontaktformular</h2>
            <br>
            <div class="inputfield">
                <label for="vn_vorname">Vorname</label>
                <input id="vn_vorname" name="vn_vorname" type="text" class="input" placeholder="Vorname" required>
            </div>
            <div class="inputfield">
                <label for="nn_nachname">Nachname</label>
                <input id="nn_nachname" name="nn_nachname"type="text" class="input" placeholder="Nachname" required>
            </div>
            <div class="inputfield">
                <label for="mail">E-Mail</label>
                <input id="mail" name="mail"type="mail" class="input" placeholder="example@mail.com" required>
            </div>
            <div class="inputfield">
                <label>Land</label>
                <div class="custom_select" >
                    <select name="country" required>
                        <option value="">Select</option>
                        <option value="germany">Germany</option>
                        <option value="latvia">Latvia</option>
                        <option value="india">India</option>
                        <option value="england">England</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label for="telefon">Telefon</label>
                <input id="telefon" name="telefon" type="tel" pattern="[+]{1}[0-9]{11,14}" class="input" placeholder="+98 123456789">
            </div>
            <div class="inputfield">
                <label for="nachricht">Ihre Nachricht</label>
                <textarea id="nachricht" name="nachricht" class="textarea" placeholder="I m feeling good!"></textarea>
            </div>
            <div class="inputfield">
                <label for="plz">PLZ</label>
                <input id="plz" name="plz" type="number" class="input" required>
            </div>
            <div class="inputfield terms">
                <label class="check">
                    <input id="check" type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>Ich erkläre mich damit einverstanden, dass meine personenbezogenen Daten nur zum Zwecke
                    der Bearbeitung im Rahmen des Kontaktformulars verarbeitet und gespeichert werden.
                    Die Daten werden nur für die hier aufgeführten Zwecke verwendet und nicht an Dritte weitergegeben.</p>
            </div>
            <div class="inputfield">
                <button class="button" type="submit">Absenden</button><br>
                <button class="button" type="reset">Surücksetzen</button>
            </div>
        </div>
        </form>

    </div>
    <div class="helper">
        <div class="headingpartner">
            <h1>Ansprechpartner</h1>

        </div>
        <div class="avatar1">
            <img class="avatarb"src="../../assets/images/1.jpg">
            <p>
                ID: 7239202<br>
                Tel: 0123456789<br>
                email: avatar1@dhbw.de
            </p>

        </div>
        <div class="avatar2">
            <img class="avatarb" src="../../assets/images/2.jpg">
            <p>
                ID: 8577349<br>
                Tel: 0123456789<br>
                email: avatar2@dhbw.de

            </p>

        </div>
        <div class="avatar3">
            <img class="avatarb" src="../../assets/images/3.jpg">
            <p>
                ID: 7239202<br>
                Tel: 0123456789<br>
                email: avatar3@dhbw.de

            </p>

        </div>
        <div class="avatar4">
            <img class="avatarb" src="../../assets/images/4.jpg">
            <p>
                ID: 8577349<br>
                Tel: 0123456789<br>
                email: avatar4@dhbw.de

            </p>

        </div>

    </div>

</div>
<?php
include('../templates/footer.php');
?>
</body>
</html>


