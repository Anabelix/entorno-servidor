<?php
    $numerosAleatorios = [
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
        rand(1, 10),
    ];

    sort($numerosAleatorios);
    
    $arrayCortado = array_slice($numerosAleatorios, (count($numerosAleatorios)/2));
    $arraySParte = array_slice($numerosAleatorios, (count($numerosAleatorios)/2));
    
    for ($i=0; $i<(count($numerosAleatorios)/2); $i++) {
        array_push($arraySParte, $numerosAleatorios[$i]);
    };
?>
