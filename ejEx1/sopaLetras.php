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
    inicializaSopaLetras ($tablero, 10, 10);

    function pintaTablero($tablero) {
        echo '<table>';
        for ($i=0; $i < count($tablero); $i++) { 
            echo '<tr>';
            for ($j=0; $j < count($tablero); $j++) { 
                echo '<td>'.$tablero[$i][$j].'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    pintaTablero ($tablero);

/*     function colocaPalabraHorizontal ($tablero, $palabra) {

    } */
?>