<?php
echo
    'Vielen Dank für Ihre Nachricht!<br> 
    Folgende Daten wurden übertragen:<br>
    <p>
    <b>Vorname: </b>' . $_POST["vn_vorname"] .'<br>
    <b>Nachname: </b>' . $_POST["nn_nachname"] .'<br>
    <b>E-Mail: </b>' . $_POST["mail"] .'<br>
    <b>Telefon: </b>' . $_POST["telefon"] .'<br>
    <b>Ihre Nachricht: </b>' . $_POST["nachricht"] .'<br>
    <b>PLZ: </b>' . $_POST["plz"] .'<br>
    </p>'
?>