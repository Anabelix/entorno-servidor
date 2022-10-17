<?php
    //Bucles
    function ordenar() {
        $num1=mt_rand(1,10); 
        $num2=mt_rand(1,10); 
        $num3=mt_rand(1,10);
        $mayor; 
        $mediano; 
        $menor;
        if (($num1>$num2 && $num1>$num3) && $num2>$num3): 
            $mayor=$num1; 
            $mediano=$num2; 
            $menor=$num3;
        elseif (($num2>$num1 && $num2>$num3) && $num3>$num1):
            $mayor=$num2; 
            $mediano=$num3; 
            $menor=$num1;
        elseif (($num3>$num1 && $num3>$num2) && $num1>$num2):
            $mayor=$num3; 
            $mediano=$num1; 
            $menor=$num2;
        endif;
        echo "<h1>".$mayor."</h1><h2>".$mediano."</h2><h3>".$menor."</h3>"; 
        echo "<hr>";
    }

    function mostrarPalabra ($cadena) {
        for ($i=0; $i < strlen($cadena); $i++) { 
            echo "<h4>".substr($cadena, $i, 1)."</h4>";
        }
        echo "<hr>";
    }

    function palabraStop ($cadena) {
        $i=0;
        while (strnatcasecmp("a", substr($cadena, $i, 1)) && $i<strlen($cadena)) {
            echo "<h4>".substr($cadena, $i, 1)."</h4>";
            $i++;
        }
        echo "<hr>";
    }

    function esPrimo($numero){
        $primo=true;
            for ($i = 2; $i < $numero; $i++) {
                if (($numero%$i) == 0) {
                    $primo = false;
                }
            }
            return $primo;
        }
    
    function numRandom() {
        $num = mt_rand(0,100);
        while(!esPrimo($num) && $num != 17) {
            echo "<span>$num</span> ";
            $num = mt_rand(0,100);
        }
    }
?>