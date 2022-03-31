<?php
$currentPage='kontakt';
include('./php/templates/header.php');
?>

<div class="kontaktgrid">
    <div class="heading">
        <h1>Get in touch!</h1>
    </div>
    <div class="form">
        <form action="dynamic_page.php" method="get">
            <h1>Kontaktformular</h1>
            <hr>
            <label>Vorname:
                <input type="text" placeholder="Vorname" name="vn_name">
            </label>
            <label>Nachname:
                <input type="text" placeholder="Nachname" name="vn_name"><br>
            </label>
            <label>Mail:
                <input type="email" placeholder="Mailadresse" name="mail" required>
            </label>
            <label>Telefon:
                <input type="text" placeholder="Telefon" name="vn_name"><br>
            </label>
            <label>Nachricht:<br>
                <textarea placeholder="Nachricht" required name="kommentar"></textarea><br>
            </label>
            <button type="submit">Absenden</button><button type="reset">Zurücksetzen</button>
        </form>
    </div>
    <div class="helper">
        <h1>Ansprechpartner</h1>
        <hr>
        <div>
            <img class="pictures" src="../../assets/images/1.jpg">
            <img class="pictures" src="../../assets/images/2.jpg">
            <img class="pictures" src="../../assets/images/3.jpg">
            <img class="pictures" src="../../assets/images/4.jpg">
        </div>



    </div>
</div>
<?php include('./php/templates/footer.php'); ?>

</DOCTYPE>


<style>
    .pictures{
        width: 10%;
        border: 1px solid rgba(0, 0, 0, 0.38);
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
        background: #8AA39B;
    }
    .helper{
        grid-area: helper;
        background: #95D9C3;
    }
    .heading{
        font-family: 'Black Han Sans', sans-serif;
        font-size: 30px;
        text-align: start;

    }

</style>