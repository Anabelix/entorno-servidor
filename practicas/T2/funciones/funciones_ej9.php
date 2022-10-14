<?php
    /*----------------------EJERCICIO 9 - FAUSTO, HENRY Y SERGIO--------------------
    a) Dado un texto o párrafo concreto, verificar si existe una palabra pasada por formulario en el parrafo y mostrar alguna frase del párrafo que la contenga. */
    $parrafo = "EOF En la década de 1920 Satyendra Nath Bose y Albert Einstein publican conjuntamente un artículo científico acerca de los fotones de luz y sus propiedades Bose describe ciertas reglas para determinar si dos fotones deberían considerarse idénticos o diferentes Esta se llama la condensado' de Bose - Einstein Einstein aplica estas reglas a los átomos preguntándose cómo se comportarían los átomos de un gas si se les aplicasen estas reglas EOF";
    $posCoincidencia = strpos($parrafo, "fotones");
    if ($posCoincidencia == true) {
        print_r(explode("fotones", $parrafo)[0]." fotones.");
    } else {
        echo '<p>No encontrado</p>';
    }
    echo "<br>";


    /*
    b) Dada una cadena o frase, eliminar los valores duplicados que puedan existir en la cadena y mostrar la cadena original y sin duplicados. */
    $frase="Mateo, Marcos, Lucas, Pedro, Max, Philip, Lucer, Robert, Maximiliano, Roberto, Pedro, Wenceslao, Teodoro, Mateo, Felipe, Petra, Lucer, Jose, Armando, Simón, Nicéforo, Jose, Felipe";
    $convertida=explode(" ", $frase);
    $sinDuplicados=array_unique($convertida);
    
    print_r($convertida);
    echo "<br>";
    print_r($sinDuplicados);
?>