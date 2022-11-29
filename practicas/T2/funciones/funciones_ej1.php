<?php
/*--------------------------EJERCICIO 1-------------------------------*/
/* Ejercicio 1: ARRAY_MAP, ARRAY_REDUCE y ARRAY_FILTER */
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

/*CON ARRAY WALK: No te devuelve un array
    array_walk($array, function($item, $clave) {
        echo ($item[1]==0?"Señora":"Señor")." ".$item[0];
    });

    $clave es optativa hehehehehhehehhehe
*/
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
?>