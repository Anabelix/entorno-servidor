<?php 
    require('printeoRechulon.php');

    /* NUMEROS:
    Random:  RAND()*/
    $min=0;
    $max=20;
    echo "RAND(): ".rand($min, $max)."<br><hr>";

    /* Redondeo: ROUND()*/
    $decimal=3.4561;
    $precision=2;
    echo "ROUND(): ".round($decimal, $precision)."<br><hr>";
    
    /* Redondeo hacia arriba: CEIL() */
    echo "Original: 4.2190<br>";
    echo "CEIL(): ".ceil(4.2190)."<br><hr>";
    
    /* Redondeo hacia abajo: FLOOR() */
    echo "Original: 4.2190<br>";
    echo "FLOOR(): ".floor(4.2190)."<br><hr>";

    /*------------------------------------------------------------------------*/
    /* STRINGS
    Modificar/extraer por caracteres: */
    $palabra = "Anabel";
    $i=0;
    echo "EXTRAER LETRA: ".$palabra[$i]."<hr>";

    /* Extraer partes: SUBSTR() */
    $inicio=0;
    $fin=3;
    echo "EXTRAER LETRAS: ".substr($palabra, $inicio, $fin)."<hr>";

    /* Extraer partes de una cadena con un delimitador. DEVUELVE ARRAY: EXPLODE()
    explode(string delimitador, $cadena); */
    $arr = explode(",", "leche,colacao,galletas,cereales");
    printeoMono($arr, "explode");

    echo "<hr>";

    /* Convierte los elementos de un array en un string: IMPLODE() */
    echo "IMPLODE(): ".implode(', ', $arr)."<hr>";

    /* Convierte un string en un array. DEVUELVE ARRAY: STR_SPLIT()
    str_split($cadena, $tamaño); */
    printeoMono(str_split("Hola que tal estas?", 1), "str_split");

    echo "<hr>";

    /* Eliminar espacios en blanco al principio y al final: TRIM() */
    $frase = "  Hola me llamo Anabel   ";
    print("BORRAR ESPACIOS PRINCIPIO Y FIN: |".trim($frase)."|")."<hr>";

    /* Lowercase: STRTOLOWER() */
    echo "STRTOLOWER(): ".strtolower($frase)."<hr>";

    /* Uppercase: STRTOUPPER()*/
    echo "STRTOUPPER() ".strtoupper($frase)."<hr>";

    /* Convetir la primera letra de una palabra en mayuscula: UCFISRT()*/
    echo "UCFIRST(): ".ucfirst($frase)."<hr>";

    /* Convertir la primera letra de cada palabra de una cadena en mayuscula: UCWORDS() */
    echo "UCWORDS(): ".ucwords($frase)."<hr>";
?>