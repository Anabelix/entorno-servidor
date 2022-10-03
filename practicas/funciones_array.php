<?php
    /*--------------------------EJERCICIO 1-------------------------------*/
    //APARTADO A:
    $personas = [ 
        ["Jorge", 1], 
        ["Bea", 0], 
        ["Paco", 1], 
        ["Amparo", 0], 
    ];
    function saludo ($personas) {
            $tratamiento=0;
            $tratamiento=$personas[1]?"Señor":"Señora";
            return $tratamiento." ".$personas[0];
        }
    
    $resultado=array_map("saludo", $personas);
    
    function imprimirArray ($array) {
        for ($i=0; $i<count($array); $i++) {
            echo $array[$i]." - ";
        }
    }
    
    //APARTADO B:
    $comida = [ 
        0 => ["Banana", 3, 56], 
        1 => ["Chuleta", 1, 256], 
        2 => ["Pan", 1, 90] 
    ];
    
    function calcularCalorias ($acumulador, $comida) {
        $acumulador+=($comida[1]*$comida[2]);
        return $acumulador;
    }
    
    $totalCalorias = array_reduce($comida, "calcularCalorias");
    
    //APARTADO C:
    function listadoHombres ($personas) {
            return ($personas[1]==1);
    }
    function listadoMujeres ($personas) {
            return ($personas[1]==0);
    }
    $listaHombres = array_filter($personas, "listadoHombres");
    $listaMujeres = array_filter($personas, "listadoMujeres");
    
    function imprimirListado ($array, $inicial, $genero) {
        echo "Listado ".$genero. ": <br>";
        for ($i=$inicial; $i<=count($array)+$inicial; $i+=2) {
            echo $array[$i][0]." - ";
        }
    }

    /*--------------------------EJERCICIO 1-------------------------------*/
    $primerArray = [1, 5, 7, 22, 67, 150, 0, 53, 44];
    $segundoArray = [5, 3, 7 , 0, 33, 44, 150, 1, 67, 22, 12];

    $interseccion = array_intersect($primerArray, $segundoArray);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos_funciones.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Secular+One&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">  
    <title>Ejercicios funciones</title>
</head>
<body>
    <div class="contenedor">
        <div class="ejercicios">
            <h1>FUNCIONES EN PHP</h1>
            <div>
                <h2>Ejercicio 1: ARRAY_MAP, ARRAY_REDUCE y ARRAY_FILTER</h2>
                <p><b>Listado con los tratamientos de cortesía: </b><br><?=imprimirArray($resultado)?></p>
                <p><b>Total de calorías consumidas: </b><br><?=$totalCalorias?>.</p>
                <p><?=imprimirListado($listaHombres, 0, "Hombres")?></p>
                <p><?=imprimirListado($listaMujeres, 1, "Mujeres")?></p>
            </div>
            <div>
                <h2>Ejercicio 2: ARRAY_INTERSECT, ARRAY_SEARCH y ARRAY_REPLACE</h2>
                <p><b>Primer array: </b><?=imprimirArray($primerArray)?><br>
                <b>Segundo array: </b><?=imprimirArray($segundoArray)?></p>
                <p><b>Resultado de la intersección:</b><br><?=imprimirArray($interseccion)?></p>
            </div>
            <div>
                <h2>Ejercicio 3</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod architecto tenetur quae vero qui! Accusamus culpa maiores, corporis quo eum est consectetur dignissimos ullam cum praesentium totam consequuntur qui sequi?</p>
            </div>
        </div>
    </div>
</body>
</html>