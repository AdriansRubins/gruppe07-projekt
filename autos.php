<?php
$currentPage='autos';
include ('./php/templates/header.php');
?>
<br>
<div class="topbox">
    <h1 id="Autos"> Autos</h1>
</div>

<div class="car1">

    <div class="car1-name">
        <h2 id="lamborghiniName">Lamborghini Huracán LP610-4 Coupé</h2>
        <button>Buy Now</button>
    </div>
    <div class="car1-des">
        <p id="lamborghiniDes">
            The Huracán Coupé has been created for unprecedented performance.
            All the power and acceleration of a naturally aspirated V-10 engine,
            without giving up control or fun of driving. This is all thanks to the
            all-wheel drive system and the 7-speed Lamborghini Doppia Frizione (LDF) dual-clutch
            transmission, as well as the innovative Piattaforma Inerziale Lamborghini (LPI), created for
            accurate and real-time detection of all the chassis movements and for immediate
            adjustment of the car setup.
        </p>
    </div>
    <div class="car1-foto">
        <img id="lamborghiniFoto" src="./assets/images/lamborghini.jpg">
    </div>
</div>

<div class="car2">

    <div class="car2-name">
        <h2 id="teslaModel3Name">Tesla Model 3</h2>
        <button>Buy Now</button>
    </div>
    <div class="car2-des">
        <p id="teslaDes">
            Model 3 comes with the option of dual motor all-wheel drive, 20”
            Überturbine Wheels and Performance Brakes for total control in all
            weather conditions. A carbon fiber spoiler improves stability at high speeds,
            all allowing Model 3 to accelerate from 0-60 mph* in as little as 3.1 seconds.
        </p>
    </div>
    <div class="car2-foto">
        <img id="teslaModel3" src="./assets/images/teslaModel3.png">
    </div>

</div>

<div class="car3">

    <div class="car3-name">
        <h2 id="porscheName">Porsche 718 Cayman GT4 RS</h2>
        <button>Buy Now</button>
    </div>
    <div class="car3-des">
        <p id="porscheDes">
            The 718 Cayman GT4 RS is more than a sports car, it is a razor-sharp track
            tool with a design that comes straight from the circuit. Rational? Not always.
            Perfect? At all times. Just like the symbiosis between a track tool on the asphalt
            and the one on your wrist: the 718 Cayman GT4 RS Chronograph from Porsche Design,
            which is reserved exclusively for 718 Cayman GT4 RS owners. Like the 718 Cayman GT4 RS,
            the chronograph is also available with the Weissach Package.
        </p>
    </div>
    <div class="car3-foto">
        <img id="porscheFoto"src="./assets/images/porsche.jpg">
    </div>

</div>

<?php include ('./php/templates/footer.php'); ?>
</body>
</html>


<style>

    .topbox{
        display: grid;
        /*background-color: #86A067;*/
        height: 20vh;
        padding: 40px 30px 0px 40px;
        margin-top: 140px;

    }
    #Autos{
        font-family: 'Black Han Sans', sans-serif;
        font-size: 80px;
        text-align: start;
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
        /*background: #5C6F68;*/
        padding: 30px 30px 30px 30px;


    }
    #lamborghiniFoto{
        width: 100%;
        object-fit: cover;
        height: 100%;
    }


    .car1-des{
        grid-area: car1-des;
        /*background: #8AA39B;*/
        padding: 50px 30px 30px 30px;

    }
    #lamborghiniDes{
        font-family: "Gloria Hallelujah", cursive;
        color: black;
    }

    .car1-name{
        grid-area: car1-name;
        /* background: #95D9C3;*/
        display: block;
        padding: 20px 20px 20px 20px;
        font-size: 23px;

    }
    #lamborghiniName{
        font-family: "Gloria Hallelujah", cursive;

    }


    .car2{
        display: grid;
        grid-template-columns: 40% 60%;
        grid-template-rows: 30% 70%;
        height: 70vh;
        width: 100vw;
        grid-gap: 0.2rem;
        grid-template-areas:
        "car2-name car2-foto"
        "car2-des car2-foto";
    }

    .car2-foto{
        grid-area: car2-foto;
        /*background: #5C6F68;*/
        padding: 30px 30px 30px 30px;

    }
    #teslaModel3{
        width: 100%;
        object-fit: cover;
        height: 100%;
    }

    .car2-des{
        grid-area: car2-des;
        /*background: #8AA39B;*/
        padding: 100px 30px 30px 30px;


    }
    #teslaDes{
        font-family: "Gloria Hallelujah", cursive;
        color: black;
    }

    .car2-name{
        grid-area: car2-name;
        /*background: #95D9C3;*/
        display: block;
        padding: 20px 20px 30px 30px;
        font-size: 30px;

    }
    #teslaModel3Name{
        font-family: "Gloria Hallelujah", cursive;

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
        /*background: #5C6F68;*/
        padding: 30px 30px 30px 30px;

    }
    #porscheFoto{
        width: 100%;
        object-fit: cover;
        height: 100%;
    }

    .car3-des{
        grid-area: car3-des;
        /*background: #8AA39B;*/
        padding: 50px 30px 30px 30px;


    }
    #porscheDes{
        font-family: "Gloria Hallelujah", cursive;
        color: black;
    }

    .car3-name{
        grid-area: car3-name;
        /*background: #95D9C3;*/
        display: block;
        padding: 20px 20px 20px 20px;
        font-size: 25px;

    }
    #porscheName{
        font-family: "Gloria Hallelujah", cursive;

    }
    @media only screen and (max-width:600px)
    {
        .car1{
            display: grid;
            grid-template-columns: 100%;
            grid-template-rows: 50% 20% 30%;
            grid-gap: 0.2rem;
            height: 70vh;
            width: 100vw;
            grid-template-areas:
            "car1-foto"
            "car1-name"
            "car1-des";
        }
        .car1-des{
            grid-area: car1-des;
        }
        .car1-foto{
            grid-area: car1-foto
        }
        .car1-name{
            grid-area: car1-name;
            display: block;
            padding: 20px 20px 20px 20px;
            font-size: 16px;
        }

    }





</style>


