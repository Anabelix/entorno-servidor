<?php
    $texto="Hola mundo!";
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
        p {
            text-align:center;
            font-family: 'Montserrat Alternates', sans-serif;
            font-size: 50px;
            color: #0090E0;
            text-shadow: 1px 1px 2px #39405a;
        } 
    </style>
    <title>Ejercicio 2</title>
</head>
<body>
    <p><?=$texto?></p>
</body>
</html>