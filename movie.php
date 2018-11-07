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
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
<link href="css/styles.css" rel="stylesheet" type="text/css">

<!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>
<header>
    <div class="menu">
        <div class="logo"><i class="fas fa-film"></i><p>MWM</p></div>

        <nav>
            <div class="navMobile">
                <span id="navBars" class="fa fa-bars"></span>
            </div>
            <div id="navElements">
                <a href="#"><i class="fas fa-thumbs-up"></i>Populære film</a>
                <a href="#"><i class="fas fa-play-circle"></i>Genre</a>
                <a href="#"><i class="fas fa-user"></i>Bruger</a>
            </div>
        </nav>

    </div>

    <hr size="5px" width="90%" color="white">
</header>

<content>
    <div class="gridmovies">
        <div class="movie1">
            <img src="images/mwm/avatar.jpg" alt="film">
            <p>Title <br> Rating</p>
        </div>

        <div class="movie2">
            <img src="images/mwm/avenger.jpg" alt="film">
            <p>Title <br> Rating</p>
        </div>

        <div class="movie3">
            <img src="images/mwm/deadpool.jpg" alt="film">
            <p>Title <br> Rating</p>
        </div>

        <div class="movie4">
            <img src="images/mwm/game_night.jpg" alt="film">
            <p>Title <br> Rating</p>
        </div>

        <div class="movie5">
            <img src="images/mwm/incredibles_2.jpg" alt="film">
            <p>Title <br> Rating</p>
        </div>

        <div class="movie6">
            <img src="images/mwm/interstellar.jpg" alt="film">
            <p>Title <br> Rating</p>
        </div>

        <div class="movie7">
            <img src="images/mwm/jumanji.jpg" alt="film">
            <p>Title <br> Rating</p>
        </div>

        <div class="movie8">
            <img src="images/mwm/split.jpg" alt="film">
            <p>Title <br> Rating</p>
        </div>

        <div class="movie9">
            <img src="images/mwm/titanic.jpg" alt="film">
            <p>Title <br> Rating</p>
        </div>

        <div class="movie10">
            <img src="images/mwm/the_greatest_showman.jpg" alt="film">
            <p>Title <br> Rating</p>
        </div>

        <div class="movie11">
            <img src="images/mwm/the_notebook.jpg" alt="film">
            <p>Title <br> Rating</p>
        </div>

        <div class="movie12">
            <img src="images/mwm/thor_ragnarok.jpg" alt="film">
            <p>Title <br> Rating</p>
        </div>

    </div>
    <hr size="5px" width="90%" color="white">
</content>


<footer>
    <div class="footertx"><p>Følg os</p></div>

    <div class="some">
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
    </div>
</footer>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $(document).ready(function(e) {
        // nav open = 0 betyder at når burgermenuen ikke er åben
        // nav open =  1 betyder at burgermenuen er åben.
        var navOpen = 0;

        //her gør man det muligt at klikke på burgermenuen
        //samt få den til at menuen kan rulle op og ned.
        $("#navBars").click(function(e) {

            if(navOpen ==1){
                $("#navElements").slideUp(200);
                navOpen=0;
            } else{
                $("#navElements").slideDown(500);
                navOpen=1;
            }
        });

        // resize gør at når du laver siden større så forsvinder slidedownen. hvis menuen er åben.
        $(window).resize(function (e) {
            var width = $(window).width();

            if(width>767) {
                $("#navElements").css({"display":"-webkit-flex","display":"flex"}); // får elementerne til at flexe igen efter udvidelse
            } else {
                $("#navElements").css("display","none");// ellers vises de ikke = display none..
                navOpen=0
            }

        })


    });

</script>
</body>
</html>