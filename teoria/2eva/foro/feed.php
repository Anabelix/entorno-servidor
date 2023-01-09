<?php
require('./accesoBases.php');
session_start();
$username = "";
$passw = "";

function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['Twittear'])) {
    if (isset($_POST['tweet']) && $_POST['tweet'] != "") {
        $tweet = clean_input($_POST['tweet']);
        
        //Preparamos la query
        $stmt = $dbh->prepare("INSERT INTO mensajes (id, username, mensaje, timestamp) VALUES (:id,:username,:mensaje, :fecha)");

        //Aqui mete los datos
        $username = $_SESSION['user'];
        $mensaje = $tweet;
        $fecha = time();
        //Aqui ejecutas para pegar los valores en la sentencia
        if ($stmt->execute([
            ':id' => $id,
            ':username' => $username,
            ':mensaje' => $tweet,
            ':fecha' => $fecha,
        ])) {
            echo 'Insercción realizada!!!!!';
        } else {
            echo 'Insercción fallida :(';
        }
    } else {
        $errores = "No puedes envíar un tweet vacío";
    }
}

$consulta = $dbh->prepare("SELECT * FROM mensajes");
$consulta->execute();

function pintar($consulta)
{
    while ($info = $consulta->fetch()) {

        $minutos = round(((time() - $info['timestamp']) / 60) / 60, 1);
        if ($minutos == 0) {
            $tiempo = ++$minutos . "m";
        } elseif ($minutos < 1) {
            $tiempo = ($minutos * 60) . "m";
        } elseif ($minutos >= 1 || $minutos <= 24) {
            $tiempo = ceil($minutos) . "h";
        } else {
            $tiempo = date('G:i:s', ((time() - $info['timestamp'])));
        }

        echo '<div class="tw"><span>' . $info['username'] . ' ' . $tiempo . '</span><p>' . $info['mensaje'] . '</p></div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feed.css">
    <title>Timeline</title>
</head>

<body>
    <div class="contenedor">
        <h1>Inicio</h1>
        <form action="" method="post">
            <div class="cuerpo">
                <div class="foto" id="admin"></div>
                <textarea value="tweet" name="tweet" id="tweet" cols="30" rows="10" placeholder="¿Qué está pasando?"></textarea>
                <span><?php isset($errores) ? print($errores) : "";?></span>
            </div>
            <input type="submit" value="Twittear" name="Twittear">
        </form>

        <div class="feed">
            <?= pintar($consulta) ?>
        </div>
    </div>
</body>

</html>