<?php
    include('comun.php');
    if (isset($_POST['fondo'])) {
        $fondo = $_POST['fondo'];
        setcookie('fondo', $fondo);
    }
    if (isset($_POST['letra'])) {
        $letra = $_POST['letra'];
        setcookie('letra', $letra);
        
    }
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        setcookie('name', $name);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
        footer {
            background-color: <?=$fondo?>;
        }
        a, span {
            color: <?=$letra?>
        }
    </style>
    <title>Config</title>
</head>
<body>
    <div class="contenedor"><p>Config jejeje</p>
        <form action="" method="post">
            <label for="letra">Color de letra</label>
            <input type="color" name="letra" id="letra" value="<?=$letra?>"><br>

            <label for="fondo">Color de fondo</label>
            <input type="color" name="fondo" id="fondo" value="<?=$fondo?>"><br>

            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="<?=$name?>"><br>
            <input type="submit" value="Gracias">
        </form>
    </div>
</body>
</html>