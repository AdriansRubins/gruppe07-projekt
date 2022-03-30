<?php
$currentPage='kontakt';
include ('./php/templates/header.php');
?>
<br>

<div class="kontaktgrid">
    <div class="heading">
        <h1>Get in touch!</h1>
    </div>
    <div class="form">form</div>
    <div class="helper">helper</div>
</div>
<?php include ('./php/templates/footer.php'); ?>
</body>
</html>


<style>
    .kontaktgrid{
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 0.6fr 2.5fr;
        grid-template-areas:
        "heading heading"
        "form helper";
        border: 1px;
        width: 100vw;
        grid-gap: 0.2rem;
        height:100vh;
        margin-top: 140px;
    }
    .heading{
        grid-area: heading;
        background: #5C6F68;
        padding: 40px 0px 20px 40px;
    }
    .form{
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