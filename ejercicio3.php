<?php
    $texto="Hola mundo!";
    $nombre="Anabel";
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
    <style>
        h1, p {
            text-align:center;
            font-family: 'Montserrat Alternates', sans-serif;
        }
        h1 {
            font-size: 50px;
            color: #0090E0;
            text-shadow: 1px 1px 2px #39405a;
        }
        p{
            margin-top: -3%;
        }
    </style>
    <title>Ejercicio 3</title>
</head>
<body>
    <h1><?=$texto?></h1>
    <p>Esta página ha sido programada por<b><i><?=$nombre?></b></i></p>
</body>
</html>