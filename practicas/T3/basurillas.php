<?php
    require('../../teoria/printeoRechulon.php');

    $cosas = [
        3,
        "frutas"  => ["a" => "naranja", "b" => [1, 2], "c" => "manzana"],
        "números" => [1, 2, 3, 4, 5, 6],
        "hoyos"   => ["primero", 5 => "segundo", "tercero"],
        "asd"
    ];
    function imprimirArray ($cosas) {
        $tabular = "_";

        echo "array<br>";
        foreach ($cosas as $clave => $valor) {

            if (is_array($valor)) {
                echo $tabular."array<br>";
                echo $valor."<br>";
            } else {
                echo "$tabular$valor<br>";
            }
        }
    }
    imprimirArray($cosas);
?>