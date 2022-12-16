<?php
    session_name('anabelixframework');
    session_start();

    $intentos=isset($_SESSION['intentos'])?$_SESSION['intentos']:4;
    $intentos--;
    $_SESSION['intentos']=$intentos;

    $fondo;
    $letra;
    $name='Anonimo';
    if (isset($_SESSION['fondo'])) {
        $fondo = $_SESSION['fondo'];
    }
    if (isset($_SESSION['letra'])) {
        $letra = $_SESSION['letra'];
    }
    if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
    }
?>