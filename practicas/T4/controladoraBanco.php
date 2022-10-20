<?php
    require('./CuentaBancaria.php');
    $cb1 = new CuentaBancaria('anabel', 10000);
    print $cb1->mostrar();
?>