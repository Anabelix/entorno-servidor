<?php
    require('/mirepo/entorno-servidor/teoria/printeoRechulon.php');

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

    $arr=[2,5,7,"pEpA", 3.5, true];
    printeoCool(tipos($arr));
?>