<?php   
    require('../clases/UsuariosCopia.php');
    require('../clases/UsuariosPremium.php');
    require('../clases/UsuarioAdmin.php');
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
    $user2->introResultado('empate');
    $user2->introResultado('derrota');
    $user2->introResultado('victoria');
    $user2->introResultado('empate');
    $user2->introResultado('victoria');
    $user2->introResultado('victoria');
    $user2->introResultado('victoria');
    $user2->introResultado('victoria');
    $user2->introResultado('victoria');
    $user2->introResultado('victoria');
    $user2->introResultado('derrota');
    $user2->introResultado('derrota');
    $user2->introResultado('derrota');
    $user2->introResultado('derrota');
    $user2->introResultado('derrota');
    $user2->introResultado('derrota');
    print $user2->imprimirInfo();

    $user3 = new UsuarioAdmin ('miguel', 'garcia sanchez', 'futbol');
    $user3->introResultado('empate');
    $user3->introResultado('derrota');
    $user3->introResultado('victoria');
    $user3->introResultado('empate');
    $user3->introResultado('derrota');
    $user3->introResultado('derrota');
    $user3->introResultado('derrota');
    $user3->introResultado('victoria');
    $user3->introResultado('victoria');
    $user3->introResultado('victoria');
    print $user3->imprimirInfo();
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