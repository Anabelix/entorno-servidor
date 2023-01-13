<?php
if (isset($_POST['enviar'])) {
    $imagen = $_FILES['imagen'];
    if ($imagen['error']==0) {
        $nombre=$imagen['name'];
        $tipo=$imagen['type'];
        $ruta_temp=$imagen['tmp_name'];

        if (($tipo=='image/jpeg') || ($tipo=='image/png')) {
            $ruta = "img/".$nombre;
            $i=1;
            while(file_exists($ruta)) {
                $nombre=$i."-".$nombre;
                $ruta="img/".$nombre;
                $i++;
            }
            if (move_uploaded_file($ruta_temp, $ruta)) {
                echo "Imagen subida";
            } else {
                echo "Error al subir la imagen";
            }
        } else {
            echo "El formato debe ser JPEG o PNG";
        }
    } else {
        echo "Error al subir la imagen";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="javascript.js" defer></script>
    <style>
        .foto {
            width:250px;
            height:250px;
            border:1px solid;
            background-color: #EAEAEA;
            background-image: url('<?=$ruta?>');
            background-size:cover;
        }

        #formulario {display:none;}
    </style>
    <title>Subida</title>
</head>
<body>
    <div class="foto"></div>
    <input type="button" value="Editar" onclick="openForm()">
    <form action="" method="post" enctype="multipart/form-data" id="formulario">
        <label for="imagen">Fotografía:</label>
        <input type="file" name="imagen" id="imagen">

        <input type="submit" value="enviar" name="enviar">
        <input type="button" value="cerrar" onclick="closeForm()">
    </form>
    <script>
        let imagen = document.querySelector(".foto");
        imagen.style.backgroundImage="url('"+<?=$ruta?>+"')";
    </script>
</body>
</html>
