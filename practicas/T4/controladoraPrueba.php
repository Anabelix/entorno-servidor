<?php   
    require('./UsuariosCopia.php');
    require('./UsuariosPremium.php');
    require('./UsuarioAdmin.php');
    $user1 = new UsuariosCopia ('anabel', 'pedrajas navarro', 'natación');

    $user1->introResultado('empate');
    $user1->introResultado('derrota');
    $user1->introResultado('victoria');
    $user1->introResultado('empate');
    $user1->introResultado('victoria');
    $user1->introResultado('victoria');
    $user1->introResultado('victoria');
    $user1->introResultado('victoria');
    $user1->introResultado('victoria');
    $user1->introResultado('victoria'); //sube +1
    print $user1->imprimirInfo();

    $user2 = new UsuariosPremium ('alvaro', 'nieves hurtado', 'tenis');
    print $user2->imprimirInfo();
    print $user2->getNivelJuego()."<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="controladoraPrueba.css">
    <title>Usuarios</title>
</head>
<body>
    
</body>
</html>