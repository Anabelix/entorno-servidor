<?php 
require('config.php');
require('DWESBaseDatos.php');
require('mailer.php');
require('../vendor/autoload.php');

$db=DWESBaseDatos::obtenerInstancia();
$db->inicializa(
    $CONFIG['db_name'],
    $CONFIG['db_user'],
    $CONFIG['db_pass'],
);


session_start();
require('recuerdame.php');
?>