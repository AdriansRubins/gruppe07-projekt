<?php
$currentPage='kontakt';
include('./php/templates/header.php');
?>

<div class="kontaktgrid">
    <div class="heading">
        <h1>Get in touch!</h1>
    </div>
    <div class="form">
        <form action="dynamic_page.php" method="post">
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
            <p id="nachricht"><input type="checkbox" required>Ich erkläre mich damit einverstanden, dass meine personenbezogenen Daten nur zum Zwecke
                der Bearbeitung im Rahmen des Kontaktformulars verarbeitet und gespeichert werden.
                Die Daten werden nur für die hier aufgeführten Zwecke verwendet und nicht an Dritte weitergegeben.
            </p>
            <button class="inputfield" type="submit">Absenden</button><button class="inputfield" type="reset">Zurücksetzen</button>
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
<?php include('./php/templates/footer.php'); ?>

<style>
    h3{
        font-size: x-large;
        font-weight: bold;
    }
    li{
        font-size: large;
    }
    ul{
        width: 30%;
        margin: 0% 10%;
    }
    .Textposition{
        display: flex;
    }
    #headinghelper{
        text-align: center;
    }
    h1{
        margin-bottom: 10%;
        font-size: xxx-large;
    }
    #nachricht{
        font-size: x-large;
        width: 100%;
    }
    .inputfield{
        font-size: x-large;
        width: 40%;
    }
    label{
        font-size: x-large;
        width: 40%;
    }
    .pictures{
        width: 30%;
        margin: 0% 9%;
        border: 2px solid rgba(0, 0, 0, 0.90);
        border-radius: 2px;
    }
    .kontaktgrid{
        display: grid;
        margin-top: 150px;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 2fr;
        grid-template-areas:
        "heading heading"
        "form helper";
        border: 1px;
        width: 100vw;
        grid-gap: 0.2rem;
        height:100vh;
    }
    .heading{
        grid-area: heading;
        background: #5C6F68;
    }
    .form {
        grid-area: form;
        background-color: #5C6F68;
        padding: 5%;
        margin: 0.5% 0.25% 0.5% 0%;
    }
    .helper{
        grid-area: helper;
        background: #95D9C3;
        background-color: #5C6F68;
        padding: 5%;
        margin: 0.5% 0% 0.5% 0.25%;
    }
    .heading{
        font-family: 'Black Han Sans', sans-serif;
        font-size: 30px;
        text-align: start;

    }


</style>