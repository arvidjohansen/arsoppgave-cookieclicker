<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Button Masher - A Coockie Clicker Clone</title>
</head>

<body>
    <div id="container">
        <div id="spillOmraade" class="content">
            <h2>Her kan du spille Button Masher!</h2>
            <button id="knapp">Klikk på meg</button>
            <button id="plussEnKnapp">+1 (koster 10 klikk)</button>
            <button id="plussTiKnapp">+10 (koster 100 klikk)</button>

            <div id="utskriftOmraade">Trykk på knappen for å starte spillet.</div>

        </div>
        <div id="highscoreOmraade" class="content">
            <h2>Her er de ti beste resultatene, straight from your DB:</h2>
            <?php
                include('php/showTopTen.php');
           ?>

        </div>
        <div id="lagreScoreOmraade" class="content">
           <?php
                include('php/lagreScore.php');
           ?>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>