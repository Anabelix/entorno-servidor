<?php
    $tareas = [
        "ver series", 
        "dormir", 
        "ir al cine", 
        "patinar", 
        "comer", 
        "estudiar", 
        "escuchar musica", 
        "ir de compras", 
        "correr", 
        "pasear al perro", 
        "sacar la basura",
        "limpiar la casa",
        "hacer la colada",
        "salir con los amigos",
        "ir a trabajar"
    ];
    $personas = ["andrés", "maría", "álvaro", "paloma", "lucas", "adriana"];
    
    $aleatorioPersonas=array_rand($personas, 6);
    $aleatorioTareas=array_rand($tareas, 6);

    for ($i=0; $i<6; $i++) {
        echo $tareas[$aleatorioTareas[$i]];
    }
    

    echo "<hr>";
    for ($i=0; $i < count($personas); $i++) {
        echo ucfirst($personas[$aleatorioPersonas[$i]])." tiene que... ".$tareas[$aleatorioTareas[$i]].".<br>";
    }

    echo "<hr>";
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
    }
?>