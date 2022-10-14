<?php
    $num=37;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="1.2">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
    <title>Ejercicio 8</title>
    <style>
        div {
            
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        span {
            padding: 0 1% 0 1%;
            border-radius: 30px 30px 30px 30px;
            /* box-shadow: 1px 1px 10px #b4c0ca; */
            font-weight: bold;
        }
    </style>
</head>
<body> 
    <div>
    <?php for ($fila=1; $fila<=$num; $fila++) { ?>
        <span style="background-color: rgb(<?=rand(170, 255) . ", " . rand(170, 255) . ", " . rand(170, 255)?>);">
        <?php for ($j=0; $j<$fila; $j++) { ?>
            <?='&nbsp;'?>
        <?php } ?>
        </span>
        <br>
    <?php } ?>
        </div>
</body>
</html>