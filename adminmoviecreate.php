<?php
require("db/db.php");

if (isset($_POST["mName"]) && !empty($_POST["mName"])){
    $mName = $_POST["mName"];
    $mGenre = $_POST["mGenre"];
    $mAarstal = $_POST["mAarstal"];
    $mTid = $_POST["mTid"];
    $mRating = $_POST["mRating"];
    $mBeskrivelse = $_POST["mBeskrivelse"];
    $mBillede = $_POST["mBillede"];

// Create database connection
    $db = mysqli_connect("localhost", "root", "", "mwm");

// Initialize message variable
    $msg = "";

// If upload button is clicked ...
    if (isset($_POST['upload'])) {
        // Get image name
        $mBillede = $_FILES['mBillede']['name'];

        // image file directory
        $target = "images/mwm/".basename($mBillede);

        $sql = "INSERT INTO movies (mBillede) VALUES ('$mBillede')";
        // execute query
        mysqli_query($db, $sql);

        if (move_uploaded_file($_FILES['mBillede']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
    }
    $result = mysqli_query($db, "SELECT * FROM movies");

    $insert = mysqli_query($db, "INSERT INTO movies (mName, mGenre, mAarstal, mTid, mRating, mBeskrivelse,mBillede) 
    VALUES('$mName','$mGenre', '$mAarstal', '$mTid','$mRating','$mBeskrivelse','$mBillede')");

    ?>
    <script>
        alert("du har vundet");
        document.location='adminmoviecreate.php';
    </script>

    <?php
    exit;
} else {
    echo mysqli_error($db);
}
?>

<?php

?>

<?php

$moviesQuery = mysqli_query($db, "SELECT * FROM movies"); //muligt at få den til at gå fra å-a hvis man sætter - ORDER BY sName DESC. Står for descending
while($movies = mysqli_fetch_assoc($moviesQuery)
){
echo $movies["mName"]. "<br>".$movies["mGenre"].$movies["mBillede"]."<br><br>";


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

<form method="post" action="adminmoviecreate.php" enctype="multipart/form-data">
    <label for="name">Navn</label>
    <input type="text" name="mName" id="navn" placeholder="Navn" value="">
    <br>
    <label for="genre">Genre</label>
    <input type="text" name="mGenre" id="genre" placeholder="genre" value="">

    <br>
    <label for="aarstal">aarstal</label>
    <input type="number" name="mAarstal" id="aarstal" placeholder="aarstal" value="">

    <br>
    <label for="tid">Tid</label>
    <input type="number" name="mTid" id="tid" placeholder="tid" value="">

    <br>
    <label for="rating">Rating</label>
    <input type="number" name="mRating" id="rating" placeholder="rating" value="">

    <br>
    <label for="beskrivelse">Beskrivelse</label>
    <input type="text" name="mBeskrivelse" id="beskrivelse" placeholder="beskrivelse" value="">
    <br>

    <br>
    <label for="billede">Billede</label>
    <input type="file" name="mBillede" id="billede" placeholder="billede" value="">


    <br>

    <button type="submit" name="upload">Tilføj film</button>

</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(e) {
        // Din kode her
    });
</script>



</body>
</html>
</html>