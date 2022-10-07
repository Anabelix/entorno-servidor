<?php
    require('./funciones_ej1.php');
    require('./funciones_ej2.php');
    require('./funciones_ej3.php');
    require('./funciones_ej4.php');
    /* require('./funciones_ej5.php'); */
    require('./funciones_ej6.php');

    function imprimirArray ($array) {
        echo '<span>';
        for ($i=0; $i<count($array); $i++) {
            echo " - ".$array[$i]. " ";
        }
        echo '- </span>';
    }
    
    function imprimirListado ($array, $inicial, $genero) {
        echo "<b>Lista filtrada ".$genero. ": </b><span>- ";
        for ($i=$inicial; $i<=count($array)+$inicial; $i+=2) {
            echo $array[$i][0]." - ";
        }
        echo "</span>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos_funciones.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Secular+One&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">  
    <title>Ejercicios funciones</title>
</head>
<body>
    <div class="contenedor">
        <div class="ejercicios">
            <h1>FUNCIONES DE ARRAYS EN PHP</h1>
            <!--Ejercicio 1: Jorge-->
            <div>
                <h2>Ejercicio 1: ARRAY_MAP, ARRAY_REDUCE y ARRAY_FILTER</h2>
                <p>
                    <b>Listado con los tratamientos de cortesía a partir de array_map: </b>
                    <?=imprimirArray($resultado)?>
                </p>
                <p>
                    <b>Total de calorías consumidas calculado con array_reduce: </b>
                    <span><?=$totalCalorias?></span>
                </p>
                <p><?=imprimirListado($listaHombres, 0, "Hombres")?></p>
                <p><?=imprimirListado($listaMujeres, 1, "Mujeres")?></p>
            </div>
            <!--Ejercicio 2: Panitas-->
            <div>
                <h2>Ejercicio 2: ARRAY_INTERSECT, ARRAY_SEARCH y ARRAY_REPLACE</h2>
                <p>
                    <b>Primer array: </b>
                    <?=imprimirArray($primerArray)?>
                </p>
                <p>
                    <b>Segundo array: </b>
                    <?=imprimirArray($segundoArray)?>
                </p>
                <p>
                    <b>Resultado de la intersección: </b>
                    <span><?=print_r($interseccion)?></span>
                </p>
                <p>
                    <b>Array que reemplazará datos: </b>
                    <span><?=print_r($tercerArray)?></span>
                </p>
                <p>
                    <b>Resultado del reemplazo: </b>
                    <?=imprimirArray($reemplazo)?>
                </p>
                <p>
                    <b>El valor 29 está en la posición: </b>
                    <span><?=($busqueda)?></span>
                </p>
            </div>
            <!--Ejercicio 3: Chen y Marcos-->
            <div>
                <h2>Ejercicio 3: ARRAY_WALK, ARRAY_MAP, ARRAY_REPLACE</h2>
                <p>
                    <b>Impresión de $usuarios con array_walk:</b><br>
                    <span><?=array_walk($usuarios, "imprimirHehe")?></span>
                </p>
                <p>
                    <b>Encriptar contraseñas de $usuarios con password_hash, creación de un nuevo array con array_map e impresión:</b><br>
                    <span><?=array_walk($arrayHasheada, "imprimirHehe")?></span>
                </p>
                <p>
                    <b>Sustitución de las contraseñas nulas del array anterior + encriptación, creación de un nuevo array e impresión:</b><br>
                    <span><?=array_walk($ahCompleta, "imprimirHehe")?></span>
                </p>
                <p>
                    <b>Sustitución de las contraseñas nulas de $usuarios e impresión:</b><br>
                    <span><?=array_walk($usuarios, "reemplazoEncriptado")?></span>
                    <span><?=print_r($usuarios)?></span>
                </p>
            </div>
            <!--Ejercicio 4: Arturo-->
            <div>
                <h2>Ejercicio 4: ARRAY_MERGE</h2>
                <p>
                    <b>Array resultante: </b>
                    <span><?=print_r($combinacion)?></span>
                </p>
            </div>
            <!--Ejercicio 5: Mario, Jason, Daniel-->
            <div>
                <h2>Ejercicio 5:</h2>
                <p>
                    <b>CACA: </b>
                </p>
            </div>
            <!--Ejercicio 6: Alex y Daniel-->
            <div>
                <h2>Ejercicio 7: ARRAY_SLICE, ARRAY_PUSH, SORT, RAND</h2>
                <p>
                    <b>Array resultante: </b>
                    <span><?=print_r($numerosAleatorios)?></span>
                </p>
                <p>
                    <b>Array ordenado: </b>
                    <span><?=print_r($numerosAleatorios)?></span>    
                </p>
                <p>
                    <b>Array cortado: </b>
                    <span><?=print_r($arrayCortado)?></span>    
                </p>
                <p>
                    <b>Array push: </b>
                    <span><?=print_r($arraySParte)?></span>    
                </p>
            </div>
        </div>
    </div>
</body>
</html>