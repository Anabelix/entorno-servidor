<?php
    require('../clases/CuentaBancaria.php');
    
    $cb1 = new CuentaBancaria('anabel', 100);
    print $cb1->mostrar();
    echo "<hr>";
    $cb2 = new CuentaBancaria('miguel', 100);
    print $cb2->mostrar();

    echo "<hr>";
    print $cb1->transferirA($cb2, 20);
    echo "<hr>";
    print $cb1->getSaldo();
    echo "<hr>";
    print $cb2->getSaldo();

    echo "<hr>";
    print $cb1->unirCon($cb2);
    echo "<hr>";
    print $cb2->mostrar(); 
    
    /*Crea una página con tres cuentas:
    Milloneti, saldo 1000000
    Agapito, saldo 30345
    Pobretón, saldo -10000

    Secuencia de acciones:
    Haz que el Milloneti tenga 100 retiradas de 1000 euros
    Haz que Agapito tenga un ingreso de 1200 euros
    Muestra el saldo de las 3 cuentas. Solo el saldo.
    Pobretón ha hackeado el banco y ha conseguido unir la cuenta del Milloneti a la suya.
    Agapito es buena persona y decide transferir la mitad de su salario a Milloneti para que rehaga su vida.
    Muestra el detalle (método mostrar) de las 3 cuentas.*/
?>