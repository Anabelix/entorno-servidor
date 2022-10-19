<?php
    require('../../teoria/printeoRechulon.php');

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
        return "Resultado: ".$acc;
    }

    function concatenar ($separador, ...$cadenas) {
        $resultado="";
        foreach ($cadenas as $k => $palabra) {
            $resultado.=(($k==0)?"":$separador).$palabra;
        }
        return $resultado;
    }
    concatenar(".", "Esto", "son", "varias", "cadenas");
    concatenar(";", "manolo", "felipe", "juan", "pepe", "paco", "nacho");
    
    function analizarParametros (...$parametros) {
        $analisis=[];
        $contador=1;

        foreach ($parametros as $clave => $valor) {
            (array_key_exists(gettype($valor), $analisis))? $analisis[gettype($valor)]+=$contador:  $analisis[gettype($valor)]=$contador;
        }

        return $analisis;
    }

    function intercambiar (&$var1, &$var2) {
        $aux=$var1;
        $var1=$var2;
        $var2=$aux;
    }

    function crearVararg ($cantidad=10, $maximo=10, $minimo=0) {
        $array=[];
        for ($i=0; $i<$cantidad; $i++) {
            $array[$i]=mt_rand($minimo, $maximo);
        }
        return $array;
    }

    function tipos ($valores) {
        $cadena="";
        $num=2;
        for ($i=0; $i<count($valores); $i++) {
            if (gettype($valores[$i])=="integer"): 
                $valores[$i]=pow($valores[$i], $num);
                $num++;
            
            elseif (gettype($valores[$i])=="double"): 
                $valores[$i]=$valores[$i]*(-1);
            
            elseif (gettype($valores[$i])=="string"): 
                for ($j=0; $j<strlen($valores[$i]); $j++) {
                    $letra=substr($valores[$i], $j, 1);
                    if (ctype_upper($letra)): $cadena.=strtolower($letra);
                    else: $cadena.=strtoupper($letra);
                    endif;
                }
                $valores[$i]=$cadena;
            endif;
        }

        return $valores;
    }

    $opciones = [
        "Madrid" => 28,
        "Sevilla" => 17,
        "Cáceres" => 56,
    ];

    function genera_select (array $opciones, int $seleccionada = -1) {
        echo '<select name="opciones">';

        function walkear ($value, $key, $seleccionada) {
            $escogida=($seleccionada == $value)?'selected':'';
            echo "<option value='$value' $escogida>$key</option>";
        }
        array_walk($opciones, "walkear", $seleccionada);
        echo '</select>';
    }

    $info = [
        "nombre" => "Ana Isabel Pedrajas Navarro",
        "dirección" => "Calle Diamante 32",
        "teléfono" => "91 123 45 67",
        "población" => "Madrid",
        "edad" => 23,
    ];

    function formatFormUser ($info) {
        echo '<form id="datos_personales" action="post">';
        array_walk($info, function($value, $key){
            $tipo=(is_string($value))?"text":"number";
            echo "<label for='$key'>".ucfirst($key).": <input type='$tipo'id='$tipo'name='$key' value='$value'></input></label><br>";
        });
        echo '</form>';
    }
?>