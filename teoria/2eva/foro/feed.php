<?php
require('./accesoBases.php');
session_start();
$username = "";
function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (!isset($_SESSION['user'])) {
    header('Location: no.php');
} else {
$consulta1 = $dbh->prepare("SELECT id FROM users WHERE username=:username");
$consulta1->execute([':username'=>$_SESSION['user']]);
$admin = $consulta1->fetchColumn();

if (isset($_POST['Twittear'])) {
    if (isset($_POST['tweet']) && $_POST['tweet'] != "") {
        if (strlen($_POST['tweet'])<=255) {
            $tweet = clean_input($_POST['tweet']);

            //Preparamos la query
            $stmt = $dbh->prepare("INSERT INTO mensajes (id, username, mensaje, timestamp) VALUES (:id,:username,:mensaje, :fecha)");
    
            //Aqui mete los datos
            $username = $_SESSION['user'];
            $mensaje = $tweet;
            $fecha = time();
            //Aqui ejecutas para pegar los valores en la sentencia
            $stmt->execute([
                ':id' => $id,
                ':username' => $username,
                ':mensaje' => $tweet,
                ':fecha' => $fecha,
            ]);
        } else {
            $errores = 'El máximo de caracteres permitido es 255.';
        }
        
    } else {
        $errores = "No puedes envíar un tweet vacío";
    }
}

;

$consulta = $dbh->prepare("SELECT users.id, users.username, mensajes.mensaje, mensajes.timestamp from mensajes, users where mensajes.username=users.username ORDER BY timestamp DESC");
$consulta->execute();
function pintar($consulta)
{
    while ($info = $consulta->fetch()) {

        $minutos = round(((time() - $info['timestamp']) / 60) / 60, 1);
        if ($minutos == 0) {
            $tiempo = ++$minutos . "s";
        } elseif ($minutos < 1) {
            $tiempo = ($minutos * 60) . "m";
        } elseif ($minutos >= 1 && $minutos <= 24) {
            $tiempo = ceil($minutos) . "h";
        } else {
            $tiempo = date('d/m/y', ($info['timestamp']));
        }

        echo '
        <div class="tw">
        <div class="foto user'.$info['id'].'"></div>
            <div class="info">
                <div class="data"><a class="user" href="perfil.php?user='.$info['username'].'">'.$info['username'].'</a><span>'.$tiempo .'</span></div>
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
    <script type="text/javascript" src="imagenes.js" defer></script>
    <title>Timeline</title>
</head>

<body>
    <div class="contenedor">
        <header>
            <h1>Bienvenid@ <?=$_SESSION['user']?></h1>
            <a class="enlaces" href="logout.php">Cerrar sesión</a>
        </header>

        <form action="" method="post">
            <div class="cuerpo">
                <div class="foto user<?=$admin?>" id="admin"></div>
                
                <textarea value="tweet" name="tweet" id="tweet" cols="30" rows="10"
                    placeholder="¿Qué está pasando?"></textarea>
                <span class="errores"><?php isset($errores) ? print($errores) : ""; ?></span>
            </div>
            <input type="submit" value="Twittear" name="Twittear">
        </form>

        <div class="feed">
            <?= pintar($consulta) ?>
        </div>
    </div>
</body>

</html>