<?php
    //Bucles
    $cadena="dromedario";
    for ($i=0; $i < strlen($cadena); $i++) { 
        echo "<h4>".substr($cadena, $i, 1)."</h4>";
    }
    echo "<hr>";
    
    $i=0;
    while (strnatcasecmp("a", substr($cadena, $i, 1)) && $i<strlen($cadena)) {
        echo "<h4>".substr($cadena, $i, 1)."</h4>";
        $i++;
    }
    echo "<hr>";

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
        
    numRandom();
?>