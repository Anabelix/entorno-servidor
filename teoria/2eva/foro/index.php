<?php
require './accesoBases.php';
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

if (isset($_POST['iniciar'])) {
    if (isset($_POST['username']) && $_POST['username'] != "") {
        $username = clean_input($_POST['username']);
    }
    if (isset($_POST['pass']) && $_POST['pass'] != "") {
        $passw = clean_input($_POST['pass']);
    }

    $consulta = $dbh->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
    $consulta->execute([':username' => $username]);
    $user = $consulta->fetch();
    echo "<pre>";
    print_r($user);
    echo "</pre>";

    if (isset($user) && password_verify($passw, $user['pass'])) {
        $_SESSION['user'] = $username;
        $_SESSION['tiempo'] = time();
        print("Clave correcta");
        header("Location: feed.php");
    } else {
        print("Clave errónea");
    }
}

if (isset($_POST['registrar'])) {
    
    if (isset($_POST['username']) && $_POST['username'] != "") {
        $username = clean_input($_POST['username']);
    }
    if (isset($_POST['pass']) && $_POST['pass'] != "") {
        $passw = password_hash(clean_input($_POST['pass']), PASSWORD_DEFAULT);
    }
    header('Location: registrar.php?username='.$username.'?ps='.$passw.'');
    /*$consulta = $dbh->prepare("SELECT username FROM users WHERE username = :username LIMIT 1");
    if ($consulta->execute([
        ':username' => $username,
    ])) {
        if ($consulta->fetchAll() != null) {
            echo "Usuario existente";
        } else {
            echo "Nombre de usuario no existente";
            $username = $username;
            $pass = $passw;
            $stmt = $dbh->prepare("INSERT INTO users (id, username, pass) VALUES (:id,:username,:pass)");
        
            if ($stmt->execute([
                ':id' => $id,
                ':username' => $username,
                ':pass' => $pass,
            ])) {
                echo 'Insercción realizada!!!!!';
            } else {
                echo 'Insercción fallida :(';
            }
        } 
    }
    // Ya se ha terminado; se cierra
    $resultado = null;
    $dbh = null; */
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Login</title>
</head>
<body>
    <div class="contenedor">
    <form action="" method="post">
        <h1>Connectix</h1>
        <label for="username">Usuario:</label>
        <input type="text" name="username" id="username" value=<?=$username?>>

        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" id="pass">

        <div class="botones">
            <input type="submit" value="Regístrate" name="registrar">
            <input type="submit" value="Iniciar sesión" name="iniciar">
        </div>
    </form>
    </div>
</body>
</html>