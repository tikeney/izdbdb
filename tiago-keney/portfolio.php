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
    <div class="header">
        <div class="redirectionHome"><a href="portifolio.php">Home</a></div>
        <div class="redirectionPortifolio"><a href="portifolio.php">Portfolio</a></div>
        <div class="redirectionCurriculo"><a href="curriculo.php">Curriculo</a></div>
    </div>
    <div class="main">
        <div class="person"></div>
        <div class="text"></div>

    </div>
</body>

</html>