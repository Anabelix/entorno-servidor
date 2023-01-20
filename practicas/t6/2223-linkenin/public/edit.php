<?php
require('../src/init.php');

/* require('areaprivada.php'); */
if (!isset($_SESSION['user']) || $_SESSION['user'] == "") {
    header('Location: login.php?redirect=edit.php');
    die();
    echo 'holaaaaa';
}
if (isset($_POST['enviar'])) {
    $db->ejecuta(
        "UPDATE usuarios SET descripcion=? WHERE id=?",
        $_POST['descripcion'],
        $_SESSION['id']
    );
}

if (isset($_FILES['imagen'])) {
    $imagen = $_FILES['imagen'];
    if ($imagen['error'] == 0) {
        $nombre = $imagen['name'];
        $tipo = $imagen['type'];
        $ruta_temp = $imagen['tmp_name'];

        if (($tipo == 'image/jpeg') || ($tipo == 'image/png')) {

            //Mover el fichero a su posición final
            move_uploaded_file($ruta_temp, "upload/perfiles/" . $_SESSION['id'] . ".png"); //meter este upload/perfiles  en config

            //actualizar la bd
            $db->ejecuta(
                "UPDATE usuarios SET img = ? WHERE id = ?",
                "upload/perfiles/" . $_SESSION['id'] . ".png",
                $_SESSION['id']
            );
        }
    }
}




$db->ejecuta(
    'SELECT * FROM usuarios WHERE id=?',
    $_SESSION['id']
);

$usuario = $db->obtenElDato();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
/*         .cilote::-webkit-file-upload-button {
            visibility: hidden;
        }

        .cilote::before {
            content: 'Imagen XD';
            width: min-content;
            display: inline-block;
            background: linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            padding: 5px 8px;
            outline: none;
            white-space: nowrap;
            cursor: pointer;
        }

        .cilote:hover::before {
            border-color: black;
        }

        .cilote:active::before {
            background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
        } */
    </style>
    <title>Document</title>
</head>

<body>
    <h1>Modifica tus datos usuario <?= $usuario['nombre'] ?></h1>
    <?php if ($usuario['img'] != "") { ?>
        <img src='<?= $usuario['img'] ?>'>
    <?php } ?>
    <p><?= $usuario['nombre'] ?><br><?= $usuario['correo'] ?></p>

    <form action="" method="post" enctype="multipart/form-data" id="formulario">

        <!-- <label for="imagen">Fotografía:</label> -->
        <input class="cilote" type="file" name="imagen" id="imagen" accept="image/png, image/jpeg"><br>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?= $usuario['descripcion'] ?></textarea><br>


        <input type="submit" value="enviar" name="enviar">
    </form>
</body>

</html>