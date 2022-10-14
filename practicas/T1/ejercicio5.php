<?php
    $nombre='Anabel';
    $r=2;

    
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
    <link href="estilos_ejercicio5.css" type="text/css" rel="stylesheet">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>¡Bienvenida <?=$nombre?>!</h1>

    <table>
        <tr>
            <td><p>El área de la circunferencia es:</p></td>
            <td><p><?=pow($r, 2)*M_PI?></p></td>
        </tr>
        <tr>
            <td><p>El perímetro de la circunferencia es:</p></td>
            <td><p><?=$r*2*M_PI?></p></td>
        </tr>
    </table>
 
</body>
</html>