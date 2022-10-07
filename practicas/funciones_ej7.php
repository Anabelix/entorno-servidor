<?php
    $tareas = [
        'Pelar mandarinas',
        'Comer comida',
        'Beber bebida',
        'Recoger título',
        'Cobrar salario',
        'Barrer casa',
        'Fregar casa',
        // Añade más
    ];
    
    $minions = [
        'Oto',
        'Gah',
        'Bru',
        // Opcional
    ];
    
    $aleatorioMinions=array_rand($minions, 3);
    $aleatorioTareas=array_rand($tareas, 7);

    for ($i=0; $i < count($minions); $i++) {
        echo ucfirst($minions[$aleatorioMinions[$i]])." tiene que... ".$tareas[$aleatorioTareas[$i]].".<br>";
    }

    /* echo "<hr>";
    for ($i=0; $i<5; $i++) {
            $tareas_diarias=[
                ["Lunes",$tareas[$aleatorioTareas[$j]]],
                ["Martes",$tareas[$aleatorioTareas[$j]]],
                ["Miércoles",$tareas[$aleatorioTareas[$j]]],
                ["Jueves",$tareas[$aleatorioTareas[$j]]],
                ["Viernes",$tareas[$aleatorioTareas[$j]]],
            ];
    }
    
    echo "<hr>";
    for ($i=0; $i<count($tareas_diarias); $i++) {
        for ($j=0; $j<count($tareas_diarias[$i]); $j++) {
            echo $tareas_diarias[$i][$j]." ";
        }
        echo "<br>";
    } */
?>