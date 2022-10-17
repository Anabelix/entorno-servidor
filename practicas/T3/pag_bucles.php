<?php
    require('./bucles.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/pag_bucles.css">
    <title>Bucles</title>
</head>
<body>
    <div class="contenido">
        <p><?=ordenar()?></p>
        <p><?=mostrarPalabra("dromedario")?></p>
        <p><?=palabraStop("dromedario")?></p>
        <p><?=numRandom()?></p>
    </div>
</body>
</html>