<?php
    //Ejercicio 1: map. reduce, filter
    function saludo ($personas) {
        // if ($personas[1]==0) {
        //     $tratamiento="Señora";
        // } else {
        //     $tratamiento="Señor";
        // }

        $tratamiento=0;
        $tratamiento=$personas[1]?"Señor":"Señora";
        return $tratamiento." ".$personas[0];
    }

    $personas = [
        ["Jorge", 1],
        ["Bea", 0],
        ["Paco", 1],
        ["Amparo", 0],
    ];
    
    $resultado=array_map("saludo", $personas);

    function imprimirArray ($array) {
        for ($i=0; $i<count($array); $i++) {
            echo $array[$i]."<br>";
        }
    }

    //Apartado B:
    $comida = [
        0 => ["Banana", 3, 56],
        1 => ["Chuleta", 1, 256],
        2 => ["Pan", 1, 90],
        ];
    $totalComida=[];
    
    // function calcularCalorias ($calorias, $comida) {
    //     global $comida;


    //     for ($i=0; $i<count($comida); $i++) {
    //         for ($j=1; $j<count($comida[$i]); $j++) {
    //             echo "<span>".$comida[$i][$j]."</span> ";
    //         }
    //         echo "<br>";
    //     }
    //     return $calorias;
    // }
    
    function totalCalorias ($total, $cal) {
        $total+=$cal;
        return $total;
    }

    // for ($i=1; $i<count($comida); $i++) {
    //     echo "<p>".array_reduce($comida[$i][$j], "calcularCalorias")."</p>";
    // }
    
    
    for ($i=0; $i<count($comida); $i++) {
        $j=1;
        $contador+=$comida[$i][$j]*$comida[$i][$j+1];
    }
    echo "<span>".$contador."</span> ";
    // echo "<p>".array_reduce($comida, "calcularCalorias")."</p>";
        
    // echo "<br>";
    
    // var_dump(array_reduce($totalComida, "totalCalorias"));

    //Apartado C:
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios funciones</title>
</head>
<body>
    <?=imprimirArray($resultado)?>
</body>
</html>