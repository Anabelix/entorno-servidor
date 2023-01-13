<?php
require('../src/init.php');
$insertado="";
if(isset($_POST['registrar'])) {
    $db->ejecuta(
        "INSERT INTO usuarios (nombre, passwd, correo) VALUES (?,?,?)", 
        $_POST['user'],
        password_hash($_POST['passw'], PASSWORD_DEFAULT),
        $_POST['email']
    );

    $insertado = $db->getExecuted();
    if ($insertado) {
        Mailer::sendEmail(
            $_POST['email'],
            "Nuevo usuario",
            <<<HOLA
                Bienvenido {$_POST['user']},
                Te has dado de alta correctamente, yassss!!!.
            HOLA
        );
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
    <title>Registro</title>
</head>
<body>
    <div class="contenedor">
    <?php
        if (!$insertado) {
    ?>
    <form action="registro.php" method="post">
    <h1>Regístrate</h1>
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user">

        <label for="user">Contraseña</label>
        <input type="password" name="passw" id="passw">
        
        <label for="user">Email</label>
        <input type="email" name="email" id="email">

        <input type="submit" value="Registrar" name="registrar">
    </form>
    <?php } else {
        echo "Insercción realizada";
    }?>
    </div>
</body>
</html>