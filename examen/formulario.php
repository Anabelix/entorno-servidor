<?php
    $sele="";
    $nombre="";
    $direccion="";
    $datos=[];
    $errores=[];
    $opcExtras = ["Caja madera", "Tarjeta regalo", "Envío urgente", "Panecillos", "Membrillo"];

    if (isset($_POST['enviar'])) {
        if (isset($_POST['nombre']) && $_POST['nombre']!="") {
            $datos['nombre'] = ucfirst($_POST['nombre']);
        } else {
            $errores['nombre']="*El campo nombre no puede estar vacío.";
        }
        if (isset($_POST['direccion']) && $_POST['direccion']!="") {
            $datos['direccion'] = ucfirst($_POST['direccion']);
        } else {
            $errores['direccion']="*El campo direccion no puede estar vacío.";
        }

        if (isset($_POST['extras']) && !empty($_POST['extras'])) {
            $datos['extras'] = implode(", ", $_POST['extras']);
        } else {
            $errores['extras']="*Debes seleccionar al menos una opción.";
        }


        if (count($errores) == 0) {
            echo "<p>Gracias por su pedido</p>";
            $_POST=[];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        span {
            color: red;
        }
        p {
            color: green;
        }
    </style>
    <title>Quesos</title>
</head>
<body>
    <form action="" method="post">
    <label for="nombre">Nombre del queso:</label>
        <input type="text" name="nombre" id="nombre" value="<?=$_POST['nombre']?>"><br>
        <?php
            if (isset($errores['nombre'])) {
                echo "<span>".$errores['nombre']."</span><br>";
            }
        ?>
    <label for="nombre">Dirección de envío:</label>
        <input type="text" name="direccion" id="direccion" value="<?=$_POST['direccion']?>"><br>
        <?php
            if (isset($errores['direccion'])) {
                echo "<span>".$errores['direccion']."</span><br>";
            }
        ?>

    <label for="extras"><br>Extras:</label><br>
        <?php
            array_walk ($opcExtras, function($value, $key, $extra) {  
                if (!empty($_POST['extras'])) {
                    $sele=(in_array($value, $_POST['extras']))?"checked":"";
                }
                    echo "$value <input type='checkbox' name='extras[]' value='$value' $sele><br>";
            }, $_POST['extras']);
        ?>
        <?php
            if (isset($errores['extras'])) {
                echo "<span>".$errores['extras']."</span><br>";
            }
        ?>
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>