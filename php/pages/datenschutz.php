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

<div class="dataGrid">
    <h1>This is Datenschutz page!</h1>
</div>
<?php
include ('../templates/footer.php');
?>
</body>
</html>

<style>
@import url("https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap');
    .dataGrid{
        display: grid;
        margin-top: 250px;
    }
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
#company {
    font-size: 40px;
    font-weight: 400;
    font-family: 'Black Han Sans', sans-serif;
    text-shadow: 10px 10px 15px #82888C;
    color: black;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0px 0px 0px 20px;
    height: 100px;
    position: fixed;
    top: 0;
    width: 100%;
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


button:hover ,button.active {
    background-color: #82888C;
    color: white;
    box-shadow: 0px 5px 5px 0px black;

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
    color:white;
    box-shadow: 2px 2px 50px 2px #8F9091;


}
.footer-content{

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

.socials a:hover i{
    color: aqua;

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
</style>