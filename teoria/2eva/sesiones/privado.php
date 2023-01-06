<?php
$limite = 5;
session_start();
if (!isset($_SESSION['acceso'])) {
    header('Location: noAutorizado.php');
    exit;
} elseif ((time() - $_SESSION['tiempo'])>$limite) {
    header('Location: salir.php');
    exit;
} else {
    $_SESSION['tiempo']=time();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorizado</title>
</head>
<body>
    <img src="../img/autorizado.jpg" alt="autorizado" style="background-size:20%;">
    <a href="index.php">Volver al login</a>
    <a href="salir.php">Cerrar sesion</a>
</body>
</html>