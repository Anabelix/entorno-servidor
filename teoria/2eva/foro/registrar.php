<?php
require '../../1eva/printeoRechulon.php';
require './accesoBases.php';
session_start();
$username="";
$email="";
$passw="";
$errorList=[];
function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['registrar'])) {
    if (isset($_POST['username']) && $_POST['username'] != "") {
        $username = clean_input($_POST['username']);
    } else {
        $errorList['username'] = "*El campo usuario no puede estar vacío";
    }

    if (isset($_POST['pass']) && $_POST['pass'] != "") {
        $passw = password_hash(clean_input($_POST['pass']), PASSWORD_DEFAULT);
    } else {
        $errorList['pass'] = "*El campo contraseña no puede estar vacío";
    }
    
    if (isset($_POST['email']) && $_POST['email'] != "") {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "Correo valido";
            $email = $_POST['email'];
        } else {
            $errorList['email'] = "*La dirección de email es inválida";
        }   
    } else {
        $errorList['email'] = "*La dirección de email es inválida";
    }

    /* printeoCool($errorList); */
    if (count($errorList)==0) {
        $consulta = $dbh->prepare("SELECT username FROM users WHERE username = :username LIMIT 1");
        if ($consulta->execute([
            ':username' => $username,
        ])) {
            if ($consulta->fetchAll() != null) {
                $errorList['existente']="*Usuario existente";
            } else {
                /* echo "Nombre de usuario no existente"; */
                $username = $username;
                $pass = $passw;
                $email = $email;
                $stmt = $dbh->prepare("INSERT INTO users (id, username, email, pass) VALUES (:id,:username,:email,:pass)");
            
                if ($stmt->execute([
                    ':id' => $id,
                    ':username' => $username,
                    ':email' => $email,
                    ':pass' => $pass,
                ])) {
                    /* echo 'Insercción realizada!!!!!'; */
                    $_SESSION['user'] = $username;
                    header('Location: feed.php');
                } /* else {
                    echo 'Insercción fallida :(';
                } */
            }
        }
        // Ya se ha terminado; se cierra
        $resultado = null;
        $dbh = null;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrar</title>
</head>
<body>
    <div class="contenedor">
    <form action="" method="post">
        <h1>Regístrate</h1>
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" value=<?=$email?>>
        <?php
        if (isset($errorList['email'])): echo '<span class="errores">'.$errorList['email'].'</span>';
        endif;
        ?>

        <label for="username">Usuario:</label>
        <input type="text" name="username" id="username" value=<?=$username?>>
        <?php
        if (isset($errorList['username'])): echo '<span class="errores">'.$errorList['username'].'</span>';
        elseif (isset($errorList['existente'])): echo '<span class="errores">'.$errorList['existente'].'</span>';
        endif;
        ?>

        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" id="pass">
        <?php
        if (isset($errorList['pass'])): echo '<span class="errores">'.$errorList['pass'].'</span>';
        endif;
        ?>
<!--         <label for="resume">Sobre ti:</label>
        <textarea name="resume" id="resume" cols="30" rows="10"></textarea> -->

        <div class="botones">
            <input type="submit" value="Regístrate" name="registrar">
        </div>
    </form>
    </div>
</body>
</html>