<?php
$user="";
$password="";
session_start();
function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {
    if (isset($_POST['user']) && $_POST['user'] != "") {
        $user = clean_input($_POST['user']);
    }
    if (isset($_POST['password']) && $_POST['password'] != "") {
        $password = clean_input($_POST['password']);
    }

    if (strcmp($user, "anabel")==0 && strcmp($password, "1234")==0) {
        $_SESSION['acceso']=$user;
        $_SESSION['tiempo']=time();
        header('Location: privado.php');
    } else {
        header('Location: noAutorizado.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form {
            border:1px solid;
            display:flex;
            flex-direction:column;
            width:50%;
            padding:2%;
        }
        input {
            margin-bottom:3%;
        }

        input[type="submit"] {
            width:fit-content;
            padding:1%;
            margin:0 auto;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <label for="user">Introduce tu usuario:</label>
        <input type="text" name="user" id="user" value=<?=$user?>>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password">

        <label for="recuerda"><input type="checkbox" name="recuerda" id="recuerda">Recuerdame</label>

        <input type="submit" value="Iniciar sesión" name="submit">
    </form>
    <a href="privado.php">Privado</a>
</body>
</html>
