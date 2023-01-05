<?php
/* if (isset($_COOKIE['contador'])) {
    $valor=$_COOKIE['contador'];
    ++$valor;
} else {
    $valor = 0;
} */

$fecha = date('d/m/Y G:m:s', time());
$valor=isset($_COOKIE['contador'])?$_COOKIE['contador']:0;
setcookie('contador', (1+$valor)."|".$fecha);

$datos = explode("|", $_COOKIE['contador']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Contador de visitas</h1>
    <p>Número de veces que se ha visitado la página: <strong><?php print $datos[0] ?></strong><br>
    Fecha y hora de la última visita: <strong><?php print $datos[1] ?></strong></p>
</body>
</html>