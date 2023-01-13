<?php
require './accesoBases.php';
require('./subirImagen.php');
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: no.php');
} else {
    $consulta1 = $dbh->prepare("SELECT id, email, descripcion FROM users WHERE username=:username");
    $consulta1->execute([':username' => $_GET['user']]);
    $resultado = $consulta1->fetch(PDO::FETCH_BOTH);
    $admin = $resultado['id'];
    $email = $resultado['email'];

    $consulta = $dbh->prepare("SELECT users.id, mensajes.username, mensajes.mensaje, mensajes.timestamp from users, mensajes where mensajes.username=:username and users.username=mensajes.username ORDER BY timestamp DESC");
    $consulta->execute([':username' => $_GET['user']]);
    
    function pintar($consulta)
    {
        while ($info = $consulta->fetch()) {

            $minutos = round(((time() - $info['timestamp']) / 60) / 60, 1);
            if ($minutos == 0) {
                $tiempo = ++$minutos . "m";
            } elseif ($minutos < 1) {
                $tiempo = ($minutos * 60) . "m";
            } elseif ($minutos >= 1 && $minutos <= 24) {
                $tiempo = ceil($minutos) . "h";
            } else {
                $tiempo = date('d/m/y', ($info['timestamp']));
            }

            echo '
        <div class="tw">
        <div class="foto user' . $info['id'] . '"></div>
            <div class="info">
                <div class="data">
                    <a class="user" href="perfil.php?user=' . $info['username'] . '">' . $info['username'] . '</a>
                    <span>' . $tiempo . '</span>
                </div>
                <p>' . $info['mensaje'] . '</p>
            </div>
        </div>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/feed.css">
    <link rel="stylesheet" href="css/perfil.css">
    <script src="imagenes.js" type="text/javascript" defer></script>
    <title><?=$_GET['user']?></title>
</head>
<body>
    <div class="contenedor">
        <div class="perfil">
            <a class="enlaces" href="feed.php">← Volver</a>
            <div class="foto user<?=$admin?> icon" id="admin"></div>

            <input type="button" value="Editar" onclick="openForm()">
    
            <form action="" method="post" enctype="multipart/form-data" id="formulario">
                <label for="imagen">Fotografía:</label>
                <input type="file" name="imagen" id="imagen">

                <input type="submit" value="enviar" name="enviar">
                <input type="button" value="cerrar" onclick="closeForm()">
            </form>

            <p><?=$_GET['user']?><br><?=$email?></p>
            <p><?=$resultado['descripcion']?></p>
        </div>

        <div class="feed">
            <?=pintar($consulta)?>
        </div>
    </div>
</body>
</html>