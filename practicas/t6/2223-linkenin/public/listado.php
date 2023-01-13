<?php 
require("../src/init.php");
$db->ejecuta('SELECT * FROM usuarios');
$consulta=$db->obtenDatos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$CONFIG['title']?></title>
</head>
<body>
    <h1>Hola mundo</h1>
    <?php
        foreach ($consulta as $key => $value) {
            echo "<pre>";
            print_r($value);
            echo "</pre>";
        }
    ?>
</body>
</html>