<?
require('perfil.php');
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