<?php

define("HELLO", "Hello ");
define("WORLD", "world");
$myname = "Sabine Meijran-Prins";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section>
        <div id="background">
        <img src="images/mijnhoofd.jpg" alt="">

        </div>
        <p class="sabine"><?php echo $myname; ?></p>
        <p class="presents">presents:</p>
        <h1>&ldquo;<?php echo HELLO . WORLD ?>&rdquo;</h1>
        <p class="button">Leergierig</p>
        <p class="button">Uit Enschede</p>
        <p class="button">Gek op honden</p>

    </section>
</body>
</html>
