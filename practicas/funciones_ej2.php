<?php
/*--------------------------EJERCICIO 2-------------------------------*/
    $primerArray = [1, 5, 7, 22, 4, 53, 67, 150, 29, 6, 44];
    $segundoArray = [53, 3, 7 , 29, 33, 44, 150, 1, 67, 22, 12];
    $interseccion = array_intersect($primerArray, $segundoArray);

    $tercerArray = [1=>75, 4=>13, 9=>88, 11=>31];
    $reemplazo = array_replace($interseccion, $tercerArray);
    $busqueda = array_search(29, $reemplazo);
?>