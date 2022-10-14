<?php
    /* -------------------------- EJERCICIO 10 - FRANCO -------------------------- 
    Función: array_filter En una lista de digitos del 1 al 20, filtrar y mostrar las posiciones de los números pares e impares.
    */
    $numeritos = [];

    for ($i=1; $i<=20; $i++) {
        $numeritos[]=$i;
    }
    print_r($numeritos);
    echo "<br>";

    $pares=array_filter($numeritos, fn($num)=>$num%2==0);
    print_r($pares);
    echo "<br>";

    $impares=array_filter($numeritos, fn($num)=>$num%2!=0);
    print_r($impares);
    echo "<br>";
?>