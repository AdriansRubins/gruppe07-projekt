
<header>

    <h1 id="company">Auto-Care!</h1>
    <nav>

        <ul class="nav__links">
            <li><a href="index.php"><button>Startseite</button></a></li>
            <li><a href="leistungen.php"><button>Leistungen</button></a></li>
            <li><a href="autos.php"><button>Autos</button></a></li>
            <li><a href="kontakt.php"><button>Kontakt</button></a></li>
        </ul>
    </nav>

</header>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap');

    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }


    li,a,button,p {
        font-family: "Montserrat",sans-serif;
        font-weight: 500;
        font-size: 16px;
        color: white;
        text-decoration: none;

    }
    #company{
        font-size: 60px;
        font-weight: 900;
        font-family: 'Black Han Sans', sans-serif;
        text-shadow: 10px 10px 15px #33383E;
        color: white;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 0px 0px 20px;
        background-image: url("https://images.unsplash.com/photo-1532949293134-3eb646d213f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
        height: 200px;
        box-shadow: 2px 2px 50px 2px #2660B6;
    }

    .nav__links {
        list-style: none;
    }
    .nav__links li{
        display: inline-block;
        padding: 0px 20px;

    }

    .nav__links li a{
        transition: all 0.3s ease 0s;

    }

    .nav__links li a:hover {

        color: black;

    }
    button {
        padding: 9px 25px;
        background-color: black;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease 0s;
        box-shadow: 0px 5px 5px 0px white;

    }


    button:hover {
        background-color: white;
        color: black;
        box-shadow: 0px 5px 5px 0px black;

    }
</style>

<body>


</body>
</html>