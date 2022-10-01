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
    

    //Apartado C:
   
    function impar($var)
    {
        // Retorna siempre que el número entero sea impar
        return $var & 1;
    }

    function par($var)
    {
        // Retorna siempre que el número entero sea par
        return !($var & 0);
    }

    $array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
    $array2 = [6, 7, 8, 9, 10, 11, 12];

    echo "Impar :\n";
    print_r(array_filter($array1, "impar"));
    echo "Par:\n";
    print_r(array_filter($array2, "par"));

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
    <hr>

    <?php ?>
    <hr>
</body>
</html>