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
    inicializaSopaLetras ($tablero, 7, 7);

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
        $columnaAleatoria= rand(0, count($tablero[0])-1);
        $espacioLibre=count($tablero[$filaAleatoria]) - $columnaAleatoria;
        /* echo $filaAleatoria; */
        
        echo "Fila $filaAleatoria <br>";
        echo "Celda $columnaAleatoria <br>";
        echo "Tamaño de esa fila: ".count($tablero[$filaAleatoria])."<br>";
        echo "Espacio libre: ".$espacioLibre;
        

         if (strlen($palabra) > $espacioLibre) {
            echo "No entra";
        } else {
            echo "Si entra";
            $cont=0;
            for ($i=$columnaAleatoria; $i < strlen($palabra)+$columnaAleatoria; $i++) { 
                $tablero[$filaAleatoria][$i]="<p style='color:red'>$palabra[$cont]</p>";
                $cont++;
            }
            
        }

        return $tablero;
    }
    $tablero=colocaPalabraHorizontal($tablero, "pez");
    pintaTablero ($tablero);

    function colocaPalabraVertical ($tablero, $palabra) {
/*         echo "Numero filas tablero: ".count($tablero)."<br>";
        echo "Numero columnas tablero[0]: ".count($tablero[0])."<br>"; */

        $filaAleatoria = rand(0, count($tablero)-1);
        $columnaAleatoria= rand(0, count($tablero[0])-1);
        $espacioLibre=count($tablero)-$filaAleatoria;
        /* echo $filaAleatoria; */
        
        echo "Fila $filaAleatoria <br>";
        echo "Celda $columnaAleatoria <br>";
        echo "Tamaño de esa fila: ".count($tablero[$filaAleatoria])."<br>";
        echo "Espacio libre: ".$espacioLibre;
        
       if (strlen($palabra) > $espacioLibre) {
            echo "No entra";
        } else {
            echo "Si entra";
            $cont=0;
            for ($i=$filaAleatoria; $i < strlen($palabra)+$filaAleatoria; $i++) { 
                $tablero[$i][$columnaAleatoria]="<p style='color:red'>$palabra[$cont]</p>";
                $cont++;
            }
            
        }

        return $tablero;
    }

    $tablero=colocaPalabraVertical($tablero, "jamon");
    pintaTablero($tablero);
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