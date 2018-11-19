<?php
require("db/db.php");

if (isset($_POST["mName"]) && !empty($_POST["mName"])){
    $mName = $_POST["mName"];
    $mGenre = $_POST["mGenre"];
    $mAarstal = $_POST["mAarstal"];
    $mTid = $_POST["mTid"];
    $mRating = $_POST["mRating"];
    $mBeskrivelse = $_POST["mBeskrivelse"];
    $mId = $_POST["mId"];

    $update = mysqli_query($db, "UPDATE movies SET mName = '$mName', mGenre= '$mGenre', 
                    mAarstal= '$mAarstal', mTid='$mTid', mRating= '$mRating', mBeskrivelse = '$mBeskrivelse' WHERE mId= '$mId'");

    if ($update){
        ?>
        <script>
            alert("Filmen er redigeret");
            document.location='adminmovies.php';
        </script>


        <?php
        exit;
    } else {
        echo mysqli_error($db);
    }
} else {
    $id=$_GET["id"];
    $mwmQuery =mysqli_query($db, "SELECT * FROM movies WHERE mID = $id"); //måden vi sender forespørgslen, snakker med databasen
    $movies = mysqli_fetch_assoc($mwmQuery); // den danner det her array. Når den kører i while kører det i et loop så den henter flere. Den bruger feltnavnene som keys
}
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

    <meta property="og:title" content="title">
    <meta property="og:type" content="website">
    <meta property="og:url" content=http://www.domain.dk">
    <meta property="og:image" content=http://www.domain.dk/img.jpg">
    <meta property="og:description" content="beskrivelse">
    <meta property="og:locale" content="da_DK">

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<form method="post" action="adminmovieupdate.php" enctype="multipart/form-data">
    <label for="name">Navn</label>
    <input type="text" name="mName" id="navn" placeholder="Navn" value="<?php echo $movies["mName"];?>">
    <br>
    <label for="genre">Genre</label>
    <input type="text" name="mGenre" id="genre" placeholder="genre" value="<?php echo $movies["mGenre"];?>">

    <br>
    <label for="aarstal">Årstal</label>
    <input type="number" name="mAarstal" id="aarstal" placeholder="aarstal" value="<?php echo $movies["mAarstal"];?>">

    <br>
    <label for="tid">Tid</label>
    <input type="number" name="mTid" id="tid" placeholder="tid" value="<?php echo $movies["mTid"];?>">

    <br>
    <label for="rating">Rating</label>
    <input type="number" name="mRating" id="rating" placeholder="rating" value="<?php echo $movies["mRating"];?>">

    <br>
    <label for="beskrivelse">Beskrivelse</label>
    <input type="text" name="mBeskrivelse" id="beskrivelse" placeholder="beskrivelse" value="<?php echo $movies["mBeskrivelse"];?>">
    <br>

    <br>
    <input type="hidden" name="mId" value="<?php echo $movies["mId"];?>">
    <button type="submit" name="upload">Opdater filmen</button>

</form>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(e) {
        // Din kode her
    });
</script>



</body>
</html>
