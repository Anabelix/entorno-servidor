<?php
    $dec = "Desarrollo Entorno Cliente";
    $des = "Desarrollo Entorno Servidor";
    $emp = "Iniciativa Emprendedora";
    $ing = "Inglés Técnico";
    $diw = "Diseño de Interfaces Web";
    $daw = "Despliegue de Aplicaciones Web";

    $horario = [
        1 => ["16:00", $dec, $ing, $diw, $emp, $des], 
        2 => ["16:55", $dec, $daw, $diw, $daw, $des], 
        3 => ["17:50", $dec, $daw, $diw, $daw, $des],
        4 => ["18:45", "P", "A", "T", "I", "O"],
        5 => ["19:10", $emp, $diw, $des, $des, $dec],
        6 => ["20:05", $emp, $diw, $des, $des, $dec],
        7 => ["21:00", $ing, $diw, $des, $des, $dec],
    ];

    function pintarHorario(){
        global $horario;
        $num=0;
        for ($i = 1; $i < count($horario); $i++) {
            echo "<tr>";
                for($j = 0; $j < count($horario[$i]); $j++){
                    echo "<td ";
                    if ($horario[$i][$j] == $horario[$i][0]) {
                        echo 'class="horas"';
                    }
                    while ($horario[$i][$j]==$horario[$i+1][$j]) {
                        $num++; 
                        echo ' rowspan="'.$num.'"';
                    }
                    echo ">". $horario[$i][$j]."</td>";
                }
            $num=1;
            echo "</tr>";
        }
    };

    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo_array_ej1.css">
    <title>Horario</title>
</head>
<body>
    <div class="contenedor">
            <table>
                    <?=pintarHorario()?>
            </table>
    </div>
</body>
</html>