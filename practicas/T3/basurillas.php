<?php
    require('../../teoria/printeoRechulon.php');

    $cosas = [
        3,
        "frutas"  => ["a" => "naranja", "b" => [1, 2], "c" => "manzana"],
        "números" => [1, 2, 3, 4, 5, 6],
        "hoyos"   => ["primero", 5 => "segundo", "tercero"],
        "asd"
    ];
    
    function imprimeTabulado ($cosas, $numGuiones=0) {
        array_walk($cosas, function ($value, $key, $numGuiones=0) {
            $guiones="";
            for($i=0; $i<$numGuiones; $i++) { $guiones.="_"; }
    
            if (is_array($value)):
                echo $guiones."array<br>";
                imprimeTabulado($value, $numGuiones+3);
            else:
                echo $guiones.$value."<br>";
            endif;
        }, $numGuiones);
    }
    
    imprimeTabulado($cosas);
?>