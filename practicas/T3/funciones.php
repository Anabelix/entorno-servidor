<?php
    /* [15 min] Crea una función que sume todos los números entre dos parámetros dados: inicio y fin. PRUEBAS: Escribe una web que llame a la función 10 veces con números aleatorios entre 0 y 20.*/
    function sumar ($inicio, $fin) {
        $acc=0;
        if ($inicio<$fin):
            echo "Inicio: ".$inicio." - Fin: ".$fin.".<br>";
            for($i=$inicio; $i<$fin; $i++){
                $acc+=$i;
            }
        elseif ($inicio>$fin):
            echo "Inicio: ".$fin." - Fin: ".$inicio.".<br>";
            for($i=$fin; $i<$inicio; $i++){
                $acc+=$i;
            }
        endif;
        return $acc;
    }

    for ($i=1; $i<=10; $i++) {
        echo "Resultado llamada ".$i.": ".sumar(mt_rand(0,20), mt_rand(0,20))."<br><br>";
    }
    echo "<hr>";

    /*[15 min] Crea una función que concatene todas las cadenas pasadas como parámetro utilizando el primer parámetro como seprador. PRUEBAS: Escribe una web que llame a la función 3 veces con cadenas.*/
    function concatenar ($separador, ...$cadenas) {
        $resultado="";
        foreach ($cadenas as $k => $palabra) {
            $resultado.=(($k==0)?"":$separador).$palabra;
        }
        return $resultado;
    }

    echo concatenar(" ", "Hola", "mundo", "!")."<br>";
    echo concatenar(".", "Esto", "son", "varias", "cadenas", "puntos")."<br>";
    echo concatenar(";", "manolo", "felipe", "juan", "pepe", "paco", "nacho");
    echo "<hr>";

    /*[25 min] Crea una función que genere un array asociativo que contenga información de los parámetros. La función irá descubriendo los tipos*/
    function analizarParametros (...$parametros) {
        $analisis=[];
        $contador=1;

        foreach ($parametros as $clave => $valor) {
            (array_key_exists(gettype($valor), $analisis))? $analisis[gettype($valor)]+=$contador:  $analisis[gettype($valor)]=$contador;
        }

        return $analisis;
    }

    print_r(analizarParametros(3, "h", 'hola', [1,2,3], [1], "h", true, 4, 5, false, "caca", true));




?>