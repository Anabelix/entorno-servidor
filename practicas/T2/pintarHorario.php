<?php
    $dec = "Desarrollo Entorno Cliente";
    $des = "Desarrollo Entorno Servidor";
    $emp = "Iniciativa Emprendedora";
    $ing = "Inglés Técnico";
    $diw = "Diseño de Interfaces Web";
    $daw = "Despliegue de Aplicaciones Web";
    $horario = [
        0 => ["", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes"],
        1 => ["16:00", $dec, $ing, $diw, $emp, $des], 
        2 => ["16:55", $dec, $daw, $diw, $daw, $des], 
        3 => ["17:50", $dec, $daw, $diw, $daw, $des],
        4 => ["18:45", "P", "A", "T", "I", "O"],
        5 => ["19:10", $emp, $diw, $des, $des, $dec],
        6 => ["20:05", $emp, $diw, $des, $des, $dec],
        7 => ["21:00", $ing, $diw, $des, $des, $dec],
    ];

    $colores= [
        $dec => 'style="background-color:rgb(211, 248, 213);"',
        $des => 'style="background-color:rgb(165, 180, 194);"',
        $diw => 'style="background-color:rgb(214, 197, 255);"',
        $daw => 'style="background-color:rgb(255, 197, 197);"',
        $emp => 'style="background-color:rgb(255, 218, 197);"',
        $ing => 'style="background-color:rgb(255, 249, 197);"',
    ];

    function pintarHorario(){
        global $horario;
        global $dec, $des, $emp, $ing, $diw, $daw;
        $cont=1;
        $aux=0;
        for ($i = 0; $i < count($horario); $i++) {
            echo "<tr>";
                for($j = 0; $j <count($horario[$i]); $j++){
                    echo '<td';
                    $aux=$i;
                    while ($horario[$aux][$j]==$horario[$aux+1][$j]) {
                        $cont++;
                        $aux++;
                    }
                    $cont=1;
                    
                    if($horario[$i][$j]!=$horario[$i-1][$j]) {
                        echo  $colores[$horario[$i][$j]].'rowspan="'.$cont.'">'.$horario[$i][$j]."</td>";
                    }
                    
                }
                
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
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