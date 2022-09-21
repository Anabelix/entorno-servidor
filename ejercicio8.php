<?php
    $num=5;
    $ancho=100;

    for ($i=0; $i<$num; $i++) {
        echo '<b>*</b><br>';
        $ancho*=2;
    } 
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
        b {
            border: 1px solid black;
            width: 30px;
            background-color: rgb(<?=rand(0, 255) . ", " . rand(0, 255) . ", " . rand(0, 255)?>);
        }
    </style>
</head>
<body>  

</body>
</html>