<?php
    $numerosAleatorios=[];

    function generarArray () {
        global $numerosAleatorios;
        for ($i=0; $i<20; $i++) {
            $num = rand(1,10);
            array_push($numerosAleatorios, $num);
        }

        return $numerosAleatorios;
    }

    function ordenar () {
        global $numerosAleatorios;
        sort($numerosAleatorios);
        return $numerosAleatorios;
    }

    function cortarCosas () {
        global $numerosAleatorios;
        $arraySParte = array_slice($numerosAleatorios, (count($numerosAleatorios)/2), 10, true);

        return $arraySParte;
    }

    function push () {
        global $numerosAleatorios;
        $arraySParte = array_slice($numerosAleatorios, (count($numerosAleatorios)/2));
        
        for ($i=0; $i<(count($numerosAleatorios)/2); $i++) {
            array_push($arraySParte, $numerosAleatorios[$i]);
        };

        return $arraySParte;
    }


?>
