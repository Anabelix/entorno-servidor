<?php
session_start();
if (isset($_SESSION['acceso'])) {
    unset($_SESSION['acceso']);
}
session_destroy();
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
    <h1>Byeeeee!!!</h1>
    <a href="index.php">Volver al login</a>
</body>
</html>