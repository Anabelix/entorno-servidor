<?php
    $num=5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
    <title>Ejercicio 8</title>
    <style>
        div { 
            border: 1px solid black;
            text-align:center;
        }
        span {
            padding: 1%;
        }
    </style>
</head>
<body> 
    <div>
    <?php for ($fila=1; $fila<=$num; $fila++) { ?>
        <span style="background-color: rgb(<?=rand(0, 255) . ", " . rand(0, 255) . ", " . rand(0, 255)?>);">
        <?php for ($j=0; $j<$fila; $j++) { ?>
            <?="*"?>
        <?php } ?>
        </span>
        <br>
    <?php } ?>
        </div>
</body>
</html>