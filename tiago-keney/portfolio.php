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
</head>

<body>
    <div class="header">
        <div class="redirectionPortifolio"><a href="portifolio.php">Portfolio</a></div>
        <div class="redirectionCurriculo"><a href="curriculo.php">Curriculo</a></div>
    </div>
    <div class="main">
        <div class="person"></div>
        <div class="text"></div>

    </div>
</body>

</html>