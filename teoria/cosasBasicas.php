<?php 
    require('printeoRechulon.php');

    /* NUMEROS:
    Random:  RAND()*/
    $min=0;
    $max=20;
    echo rand($min, $max)."<br>";

    echo "<hr>";

    /* Redondeo: ROUND()*/
    $decimal=3.4561;
    $precision=2;
    echo round($decimal, $precision)."<br>";
    
    echo "<hr>";
    
    /* Redondeo hacia arriba: CEIL() */
    echo 4.2190."<br>";
    echo ceil(4.2190)."<br>";
    
    echo "<hr>";
    
    /* Redondeo hacia abajo: FLOOR() */
    echo 4.2190."<br>";
    echo floor(4.2190)."<br>";
    
    echo "<hr>";

    /*------------------------------------------------------------------------*/
    /* STRINGS
    Modificar/extraer por caracteres: */
    $palabra = "Anabel";
    $i=0;
    echo $palabra[$i];

    echo "<hr>";

    /* Extraer partes: SUBSTR() */
    $inicio=0;
    $fin=3;
    echo substr($palabra, $inicio, $fin);

    echo "<hr>";

    /* Extraer partes con un delimitador. DEVUELVE ARRAY: EXPLODE()
    explode(string delimitador, $cadena); */
    printeoMono(explode(",", "leche,colacao,galletas,cereales"), "explode");

    echo "<hr>";
    /* Convierte un string en un array. DEVUELVE ARRAY: STR_SPLIT()
    str_split($cadena, $tamaño); */
    printeoMono(str_split("Hola que tal estas?", 1), "str_split");

    echo "<hr>";

    /* Eliminar espacios en blanco al principio y al final: TRIM() */
    $frase = "  Hola me llamo Anabel   ";
    echo "|".$frase."|<br>";
    print("|".trim($frase)."|");

    echo "<hr>";
?>