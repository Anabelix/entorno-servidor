<?php
if (isset($_POST['user']) && $_POST['user'] != "") {
    $user = $_POST['user'];
}
if (isset($_POST['password']) && $_POST['password'] != "") {
    $password = $_POST['password'];
}

if (isset($_POST['recuerda'])) {
    setcookie('info', $user."|".$password);
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
        <input type="text" name="user" id="user" value=<?=explode("|", $_COOKIE['info'])[0]?>>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password">

        <label for="recuerda"><input type="checkbox" name="recuerda" id="recuerda">Recuerdame</label>

        <input type="submit" value="Iniciar sesión" name="enviar">
    </form>
</body>
</html>
