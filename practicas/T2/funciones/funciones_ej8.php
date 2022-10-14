<?php
    /* ------------------------ EJERCICIO 8 - DORYAN, NATALY Y ANTONIO -----------------------
    Array_merge() enunciado: Tenemos que guardar los datos de 4 arrays de personas(cada persona es $personaN) los datos de cada persona son: nombre,apellido,telefono y correo. Junta todos los array de personas en uno llamado $personas e imprimelos en una tabla. */
    $persona1 = ["Anabel", "Pedrajas", "651081722", "anabelpedrajas@hotmail.com"];
    $persona2 = ["Alvaro", "Nieves", "682153798", "mryetireturns@gmail.com"];
    $persona3 = ["Miguel", "Torres", "609908088", "migueltorres@hotmail.com"];
    $persona4 = ["Paloma", "Navarro", "659106617", "palomanv59@hotmail.com"];

    $personas = array_merge([$persona1], [$persona2], [$persona3], [$persona4]);

    echo '<table>';
    echo '<tr><th>Nombre</th><th>Apellido</th><th>Telefono</th><th>Correo</th></tr>';
    for ($f=0; $f<count($personas); $f++) {
        echo '<tr>';
        for ($c=0; $c<count($personas[$f]); $c++) {
            echo '<td>'.$personas[$f][$c].'</td>';
        }
        echo '</tr>';
    }


    /*
    Con el array $edades dado, remplaza las edades menores de 23 por un array de colores cada vez que sea asi.Una vez cambiado los que tengan 26 años se cambiaran por el siguiente array:
        $p26=["mayor","26"];
    */
    $edades=[ "25","22 ","24 ","29 ", "26","23","20","19","26","19","20","23"];
    $colores=["azul", "verde", "rojo"];
    $p26=["mayor","26"];
    for ($i=0; $i<count($edades); $i++) {
        if ($edades[$i]<"23") {
            $edades[$i]=$colores;
        } elseif ($edades[$i]=="26") {
            $edades[$i]=$p26;
        }
    }

    var_dump($edades);


    /*
    Array_splice: hacer una clase con el numero de clase y la zona. Luego en el medio del array coloca el numero de identificacion de 10 niños en una tabla. */

    
    /*
    in_array: Crea una función que reciba como 1º parámetro un array, como 2º parámetro un valor y como 3º parámetro un mensaje de error. La función debe usar la función in_array para comprobar si el array contiene el valor especificado y si es el caso devolver la posición del array en el que tiene el valor, de lo contrario debe devolver el mensaje de error especificado (incluído si el array está vacío). */
    function buscarValor ($array, $valor, $mensaje) {
        if (in_array($valor, $array)) {
            echo "Se ha encontrado el valor en la posicion: ".print_r(array_keys($array, $valor));
        } else {
            echo $mensaje;
        }
    }

    buscarValor([1,2,3,4], 2, "Valor 2 no encontrado");
    echo "<br>";
    buscarValor([1,2,3,4], 7, "Valor 7 no encontrado");
    echo "<br>";
?>