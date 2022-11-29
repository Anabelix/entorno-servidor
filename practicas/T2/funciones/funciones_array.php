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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Secular+One&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1, h2 {
            margin-bottom: 2%;
            text-align: center;
        }
        body, html {
            width: 100%;
            height: 100%;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .contenedor {
            width: 60%;
            margin: 0 auto;
            box-shadow: 0px 0px 10px 0px rgba(46, 46, 46, 0.15);
            border-radius: 25px;
        }

        h1 { 
            font-family: 'Indie Flower', cursive; 
            padding-top:2%; 
            margin-top: 2%; 
        }

        h2 {
            border-bottom: 1px dashed black;
            font-size: 1.2rem;
        }

        p {
            margin-bottom: 2%;
            padding: 1%;
        }

        span {
            width: fit-content;
            margin:0.3%;
            padding:0.3%;
            font-family: 'Indie Flower', cursive;
            font-size: 1.2rem;
        }

        .ejercicios>div:nth-child(even){
            background-color: rgb(232, 255, 231);
            padding: 2%;
        }
        .ejercicios>div:nth-child(even) > h2{
            color:rgb(7, 31, 0);
        }
        .ejercicios>div:nth-child(even) > p {
            background-color: rgb(211, 255, 197);
        }


        .ejercicios>div:nth-child(odd){
            background-color: rgb(255, 251, 231);
            padding: 2%;
        }
        .ejercicios>div:nth-child(odd) > h2 {
            color: rgb(59, 53, 0);
        }
        .ejercicios>div:nth-child(odd) > p {
            background-color: rgb(255, 249, 197);
        }
    </style>
    

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
                <h2>Ejercicio 6: ARRAY_SLICE, ARRAY_PUSH, SORT, RAND</h2>
                <p>
                    <b>Array resultante: </b>
                    <span><?=print_r(generarArray())?></span>
                </p>
                <p>
                    <b>Array ordenado: </b>
                    <span><?=print_r(ordenar())?></span>    
                </p>
                <p>
                    <b>Array cortado: </b>
                    <span><?=print_r(cortarCosas())?></span>    
                </p>
                <p>
                    <b>Array push: </b>
                    <span><?=print_r(push())?></span>    
                </p>
            </div>
        </div>
    </div>
</body>
</html>