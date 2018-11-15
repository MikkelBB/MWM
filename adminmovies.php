<?php
require("db/db.php");

?>

<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

<!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
<meta charset="utf-8">

<!-- Titel som ses oppe i browserens tab mv. -->
<title>Sigende titel</title>

<!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->

<meta name="robots" content="All">
<meta name="author" content="Udgiver">
<meta name="copyright" content="Information om copyright">
<!-- Max ca. 170-200 karakterer - 600px -->
<meta name="description" content="">
<!-- få unikke og relevante (skal gå igen på siden) -->
<meta name="keywords" content="">
<meta property="og:title" content="titel"> 
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.domian.dk" >
<meta property="og:image" content="http://www.domain.dk/images/jpg">
<meta property="og:description" content="Beskrivelse">
<meta property="og:locale" content="da_DK">

<!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
<link href="css/styles.css" rel="stylesheet" type="text/css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>
<header>

    <div class="menu">
        <div class="logo"><i class="fas fa-film"></i><h1>MWM</h1></div>

        <!--Web header menu-->
        <div class="webmenu">

            <div class="popular"><i class="fas fa-thumbs-up"></i></div>
            <div class="populartext"><a href=""><h3>Populære film</h3></a></div>
            <div class="genre"><i class="far fa-play-circle"></i></div>
            <div class="genretext"><a href=""><h3>Film genre</h3></a></div>

            <div class="user"><i class="fas fa-user"></i></div>
            <div class="usertext"><a href=""><h3>Bruger</h3></a></div>

        </div>


        <!-- Drop down burger menu -->
        <div class="dropdown">

            <div class="button"><i class="fas fa-bars"></i></div>

            <div id="myDropdown" class="dropdown-content">
                <a href="#">Bruger</a>
                <a href="#">Populære film</a>
                <a href="#">Abonnement</a>
                <a href="#">Log ud</a>
            </div>

        </div>

</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
    $(document).ready(function (e) {
        $('.button').click(function (e) {
            $('#myDropdown').slideToggle(200);
        });
    });
</script>

<hr size="5px" width="90%" color="white">

<div class="opret">
    <a href="adminmoviecreate.php">Opret ny film</a>
</div>


<?php

$moviesQuery = mysqli_query($db, "SELECT * FROM movies"); //muligt at få den til at gå fra å-a hvis man sætter - ORDER BY sName DESC. Står for descending
while($movies = mysqli_fetch_assoc($moviesQuery)
){
    echo "<div class='adminflex'><img src='images/mwm/".$movies["mBillede"]."'><div class='admintext'>".$movies["mName"]. "<br><br>".$movies["mGenre"]."<br><br>".$movies["mRating"]."<br><br>".
        $movies["mTid"]."<br><br>".$movies["mAarstal"]."<br><br>".$movies["mBeskrivelse"]."<br><br>".
        "<a href='adminmovieupdate.php?id=".$movies["mId"]."'>Rediger</a><br><br>".
        "<a href='adminmoviedelete.php?id=".$movies["mId"]."'>Slet</a>".
        "<br><br><br></div></div>";


}

?>

<hr size="5px" width="90%" color="white">


<footer>
    <div class="footertx"><p>Følg os</p></div>

    <div class="some">
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
    </div>
</footer>



</body>
</html>