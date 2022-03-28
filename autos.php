<?php
$currentPage='autos';
include ('./php/templates/header.php');
?>
<div class="topbox">top-box</div>

<div class="car1">

    <div class="car1-name">car1-name</div>
    <div class="car1-des">car1-des</div>
    <div class="car1-foto">car1-foto</div>
</div>

<div class="car2">

    <div class="car2-name">car2-name</div>
    <div class="car2-des">car2-des</div>
    <div class="car2-foto">car2-foto</div>

</div>

<div class="car3">

    <div class="car3-name">car3-name</div>
    <div class="car3-des">car3-des</div>
    <div class="car3-foto">car3-foto</div>

</div>

<?php include ('./php/templates/footer.php'); ?>
</body>
</html>


<style>
    .topbox{
        display: grid;
        margin-top: 150px;
        background-color: #86A067;
        height: 20vh;
    }
    .car1{
        display: grid;
        grid-template-columns: 60% 40%;
        grid-template-rows: 30% 70%;
        grid-gap: 0.2rem;
        height: 70vh;
        width: 100vw;
        grid-template-areas:
        "car1-foto car1-name"
        "car1-foto car1-des";
    }
    .car1-foto{
        grid-area: car1-foto;
        background: #5C6F68;

    }

    .car1-des{
        grid-area: car1-des;
        background: #8AA39B;

    }

    .car1-name{
        grid-area: car1-name;
        background: #95D9C3;

    }


    .car2{
        display: grid;
        grid-template-columns: 40% 60%;
        grid-template-rows: 70% 30%;
        height: 70vh;
        width: 100vw;
        grid-gap: 0.2rem;
        grid-template-areas:
        "car2-des car2-foto"
        "car2-name car2-foto";
    }

    .car2-foto{
        grid-area: car2-foto;
        background: #5C6F68;

    }

    .car2-des{
        grid-area: car2-des;
        background: #8AA39B;

    }

    .car2-name{
        grid-area: car2-name;
        background: #95D9C3;

    }

    .car3{
        display: grid;
        grid-template-columns: 60% 40%;
        grid-template-rows: 30% 70%;
        height: 70vh;
        width: 100vw;
        grid-gap: 0.2rem;
        grid-template-areas:
        "car3-foto car3-name"
        "car3-foto car3-des";
    }
    .car3-foto{
        grid-area: car3-foto;
        background: #5C6F68;

    }

    .car3-des{
        grid-area: car3-des;
        background: #8AA39B;

    }

    .car3-name{
        grid-area: car3-name;
        background: #95D9C3;

    }





</style>


