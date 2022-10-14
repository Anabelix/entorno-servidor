<?php
    $num1=mt_rand(1,10); 
    $num2=mt_rand(1,10); 
    $num3=mt_rand(1,10);
    $mayor; 
    $mediano; 
    $menor;

    /* Posibilidades:
        7>5>2 mayor mediano menor
        2<7>5 menor mayor mediano
        5>2<7 mediano menor mayor
    */
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
?>