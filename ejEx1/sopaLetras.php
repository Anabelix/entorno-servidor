<?php
    $tablero = [];
// ccccc
// ddddd
// eeeee
    function inicializaSopaLetras(&$tablero, $n, $m) {
        $letras = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm','n', 'ñ', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        for ($i=0; $i < $n; $i++) { 
            array_push($tablero, []);
            for ($j=0; $j < $m; $j++) { 
                array_push($tablero[$i], $letras[rand(0, count($letras)-1)]);
            }
        }
    }
    inicializaSopaLetras ($tablero, 5, 5);

    function pintaTablero($tablero) {
        echo '<table>';
        for ($i=0; $i < count($tablero); $i++) { 
            echo '<tr>';
            for ($j=0; $j < count($tablero[$i]); $j++) { 
                echo '<td>'.$tablero[$i][$j].'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    pintaTablero ($tablero);

    function colocaPalabraHorizontal ($tablero, $palabra) {

        $filaAleatoria = rand(0, count($tablero)-1);
        /* echo $filaAleatoria; */
        
        if (strlen($palabra)<=count($tablero[$filaAleatoria])) {
            for ($i=0; $i < strlen($palabra); $i++) { 
                $tablero[$filaAleatoria][$i]=$palabra[$i];
            }
         } else {
            echo "LA PALABRA EXCEDE EL TAMAÑO DEL TABLERO";
        }

        return $tablero;
    }
    $tablero=colocaPalabraHorizontal($tablero, "casa");
    pintaTablero ($tablero);

    function colocaPalabraVertical (&$tablero, $palabra) {
        echo "Numero filas tablero: ".count($tablero)."<br>";
        echo "Numero columnas tablero[0]: ".count($tablero[0])."<br>";
    }

    colocaPalabraVertical($tablero, "jamon");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, td, tr {
            border:1px solid black;
        }
        table {
            width:60%;
            border-collapse:collapse;
            text-align:center;
        }
        tr, td {
            padding:2%;
        }
    </style>

    <title>Document</title>
</head>
<body>
    
</body>
</html>