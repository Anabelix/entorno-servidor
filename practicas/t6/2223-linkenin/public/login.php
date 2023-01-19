<?php
require('../src/init.php');

//Recoger los datos de post
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $passwd = $_POST['passw'];
    $recuerdame = $_POST['recuerdame'];
var_dump(($_POST));
var_dump(($_SESSION));
    //Consulta a bbdd por el Usuario
    $db->ejecuta(
        'SELECT id, nombre, correo, passwd FROM usuarios WHERE nombre=?',
        $_POST['user']
    );
    $user = $db->obtenDatos()[0];

    //Verificar la contraseña
    if (password_verify($_POST['passw'], $user['passwd'])) {
        $_SESSION['user'] = $user['nombre'];
        $_SESSION['id'] = $user['id'];

        //Si se ha pedido recuerdame
        if(isset($_POST['recuerdame']) && $_POST['recuerdame']=='on') {
            //Genera token
            $token = bin2hex(openssl_random_pseudo_bytes(LONG_TOKEN));
            
            //Guardar token
            $db->ejecuta(
                "INSERT INTO tokens (id_usuario, valor) VALUES (?,?)",
                $_SESSION['id'],
                $token
            );
            
            //cookie con token
            setcookie(
                'recuerdame',
                $token,
                time()+(7*24*60*60),
                true
            );
            
        }
        print("Clave correcta");
        header('Location: edit.php');
        
    } else {
        print("Clave errónea");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Login</title>
</head>

<body>
    <div class="contenedor">
        <form action="" method="post">
            <h1>Inicia sesión</h1>
            <label for="user">Usuario</label>
            <input type="text" name="user" id="user">

            <label for="user">Contraseña</label>
            <input type="password" name="passw" id="passw">

            <label for="recuerdame">Recuerdame: <input type="checkbox" name="recuerdame" id=""></label>
            <input type="submit" value="login" name="login">
        </form>
    </div>
</body>

</html>