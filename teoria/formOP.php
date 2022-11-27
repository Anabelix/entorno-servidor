<?php
    if (isset($_POST['nombre'])) {
        print_r($_POST);

        if (!empty($_POST['nombre']) && !empty($_POST['apellido'])) {
            $nb = $_POST['nombre'];
            echo '<br>Se ha guardado el valor del campo nombre en la variable $nb con valor: '.$nb;
            
            $apellido = $_POST['apellido'];
            echo '<br>Se ha guardado el valor del campo apellido en la variable $apellido con valor: '.$apellido;
        } else {
            echo "Están vacíos";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido">

        <input type="submit" value="Enviar" name="submit">
    </form>
</body>
</html>