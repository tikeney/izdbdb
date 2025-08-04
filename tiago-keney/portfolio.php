<?php

// Lê o arquivo JSON
$dadosJson = file_get_contents("curriculo.json");
$osd = json_decode($dadosJson, true);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
</head>

<body>
    <div class="portfolio-header">
        <div class="portfolio-nav-links">
            <div class="portfolio-redirectionHome"><a href="portifolio.php">Home</a></div>
            <div class="portfolio-redirectionPortifolio"><a href="portifolio.php">Portfolio</a></div>
            <div class="portfolio-redirectionCurriculo"><a href="curriculo.php">Curriculo</a></div>
        </div>
    </div>
    <div class="portfolio-main">
        <div class="portfolio-apresentacao">
            <div class="portfolio-texto-apresentacao">
                <h1>
                    Lorem ipsum dolor <span>sit amet</span>.
                </h1>
                <p>
                    Lorem ipsum dolor sit amet. Vel galisum debitis id accusantium
                    unde ut voluptatum delectus cum fugit molestiaequi cumque earum
                    aut mollitia dolores. Et suscipit dolores quo ipsum dolorum.
                </p>
            </div>
        </div>
    </div>
</body>

</html>