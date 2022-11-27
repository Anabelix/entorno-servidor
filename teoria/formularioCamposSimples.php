<?php
    $nombre="";
    $edad;
    $idioma="";
    $estado="";
    $comentarios="";
    $opcEstado = ["soltero", "casado", "divorciado"];
    $opcIdiomas = ["","español", "inglés", "francés"];

    print_r($_POST);
    echo "<br>";
    echo "<br>";


    if (isset($_POST['enviar'])) {
        if (isset($_POST['nombre']) && $_POST['nombre']!="") {
            $nombre = $_POST['nombre'];
        } else {
            $errores['nombre']="*El campo nombre no puede estar vacío.";
        }

        if (isset($_POST['edad']) && $_POST['edad']!="") {
            $edad = $_POST['edad'];
        } else {
            $errores['edad']="*El campo edad no puede estar vacío.";
        }

        if (isset($_POST['comentarios']) && $_POST['comentarios']!="") {
            $comentarios = $_POST['comentarios'];
        } else {
            $errores['comentarios']="*El campo comentarios no puede estar vacío.";
        }

        if (isset($_POST['estado']) && $_POST['estado']!="") {
            $estado = $_POST['estado'];
        } else {
            $errores['estado']="*El campo estado no puede estar vacío.";
        }
        if (isset($_POST['idioma']) && $_POST['idioma']!="") {
            $idioma = $_POST['idioma'];
        } else {
            $errores['idioma']="*El campo idioma no puede estar vacío.";
        }


        echo 'Nombre: '.$nombre.'<br>';
        echo 'Edad: '.$edad.'<br>';
        echo 'Comentarios: '.$comentarios.'<br>';
        echo 'Estado: '.$estado.'<br>';
        echo 'Idioma: '.$idioma.'<br>';
        echo "<hr>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        p {
            color: red;
        }
    </style>
    <title>Campos Simples</title>
</head>
<body>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?=$nombre?>"><br>
        <?php
            if (isset($errores['nombre'])) {
                echo "<p>".$errores['nombre']."</p>";
            }
        ?>
        
        <label for="edad">Edad: </label>
        <input type="number" name="edad" id="edad" min=10 max=80 size=2 value="<?=$edad?>"><br>
        <?php
            if (isset($errores['edad'])) {
                echo "<p>".$errores['edad']."</p>";
            }
        ?>

        <label for="nombre">Comentarios:</label><br>
        <textarea name="comentarios" id="comentarios" cols="30" rows="10" placeholder="Escribe algo aquí..."><?=$comentarios?></textarea><br>
        <?php
            if (isset($errores['comentarios'])) {
                echo "<p>".$errores['comentarios']."</p>";
            }
        ?>
        
        <label for="estado">Selecciona tu estado civil: </label><br>
        <?php
            array_walk($opcEstado, function($value, $key, $estado) {
                $sele=($estado==$value)?"checked":"";
                echo "$value<input type='radio' name='estado' id='$value' value='$value' $sele><br>";
            }, $estado);
        ?>
        <?php
            if (isset($errores['estado'])) {
                echo "<p>".$errores['estado']."</p>";
            }
        ?>

        <label for="idioma">Idiomas: </label>
        <select name="idioma" id="idioma">
        <?php
            array_walk($opcIdiomas, function($value, $key, $idioma) {
                $sele=($idioma==$value)?"selected":"";
                echo "<option value='$value' $sele>$value</option>";
            }, $idioma);
        ?>
        </select>
        <?php
            if (isset($errores['idioma'])) {
                echo "<p>".$errores['idioma']."</p>";
            }
        ?>

        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>