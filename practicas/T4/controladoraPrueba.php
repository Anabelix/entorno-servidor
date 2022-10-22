<?php   
    require('./Usuarios.php');
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
?>