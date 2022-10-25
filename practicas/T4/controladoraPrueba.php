<?php   
    require('./Usuarios.php');
    require('./UsuariosPremium.php');
    require('./UsuarioAdmin.php');
    $user1 = new Usuarios ('anabel', 'pedrajas navarro', 'natación');

    $user1->setHistorico('empate');
    $user1->setHistorico('derrota');
    $user1->setHistorico('victoria');
    $user1->setHistorico('empate');
    $user1->setHistorico('victoria');
    $user1->setHistorico('victoria');
    $user1->setHistorico('victoria');
    $user1->setHistorico('victoria');
    $user1->setHistorico('victoria');
    $user1->setHistorico('victoria'); //sube +1
    $user1->introResultado();
    print $user1->imprimirInfo();

    $user2 = new UsuariosPremium ('alvaro', 'nieves hurtado', 'tenis');
    print $user2->imprimirInfo();
    $user3 = new UsuarioAdmin ('miguel', 'pedrajas navarro', 'futbol');
    print $user3->imprimirInfo();
?>