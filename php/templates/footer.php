<?php include('./php/datenschutz.php');?>
<?php include('./php/impressum.php');?>

<div class="divy">

    <footer>
        <div class="footer-content">
            <h3 class="car-care">Auto-care!</h3>

            <p class="autodealder">The only auto dealer in Duale Hochschule Baden-Württemberg Mosbach Campus Bad Mergentheim</p>

            <ul class="socials">
                <li><i class="fa fa-google-plus"></i></li>
                <li><i class="fa fa-facebook-f"></i></li>
                <li><i class="fa fa-twitter"></i></li>
                <li><i class="fa fa-pinterest"></i></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 Auto-Care. designed by <span>Group 7</span></p>
            <div class="privacy">
                <a href="#impressum" class="impressum">Impressum</a> |
                <a href="#datenschutz" class="datenschutz">Datenschutz</a>
            </div>
        </div>
    </footer>
</div>



<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    footer{
        padding-top: 30px;
        background: #4F5153;
        height: auto;
        width: 100vw;
        font-family: "Montserrat",sans-serif;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        color: white;
        box-shadow: 2px 2px 50px 2px #8F9091;


    }
    .footer-content{

        font-family: "Montserrat",sans-serif;

        display: flex;
        align-items: center;
        flex-direction: column;
        text-align: center;

    }
    .footer-content h3{
        font-size: 1.8rem;
        font-weight: 400;
        text-transform: capitalize;
        line-height: 3rem;
    }

    .footer-content p{
        max-width: 500px;
        margin: 10px auto;
        line-height: 28px;
        font-size: 14px;
    }
    li,a {
        font-family: "Montserrat",sans-serif;
        color: white;
        text-decoration: none;

    }

    .socials{
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 1rem 0 3rem 0;


    }
    .socials li{
        margin: 0 10px;
    }
    .socials i{
        font-size: 2rem;
        transition: color .5s ease;
    }


    .socials i:hover{
        transform: scale(1.5)

    }

    .footer-bottom{

        display: flex;
        justify-content: space-between;
        background: black;
        width: 100vw;
        padding: 20px 40px 20px 20px;
        text-align: center;
        color: white;
    }
    .footer-bottom p{
        font-size: 14px;
        word-spacing: 2px;
        text-transform: capitalize;
    }

    .footer-bottom span{
        text-transform: uppercase;
        opacity: .4;
        font-weight: 200;
    }

    .fa-google-plus:hover{
        color: #E22A06;
    }
    .fa-facebook-f:hover{
        color: #1E71F5;
    }

    .fa-twitter:hover{
        color: #5C94EE;
    }
    .fa-pinterest:hover{
        color: #BB3317;
    }

    .car-care, .autodealer{
        font-family: "Montserrat",sans-serif;
        color: white;
        text-decoration: none;
    }


</style>
