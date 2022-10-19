<?php
    require('funciones.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="funciones_estilos.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Secular+One&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">

    <title>Funciones</title>
</head>
<body>
    <div class="contenido">
        <h1>Funciones</h1>
        <div class="ej">
            <h2>Ejercicio 6</h2>
            <p>Crea una función que sume todos los números entre dos parámetros dados: inicio y fin. PRUEBAS: Escribe una web que llame a la función 10 veces con números aleatorios entre 0 y 20.</p>
            <div class="resul">
                <?php for ($i=1; $i<=10; $i++) { ?>
                <p>Llamada <?=$i?>:<br>
                    <?=sumar(mt_rand(0,20), mt_rand(0,20))?>
                </p>
                <?php } ?>
            </div>
        </div>

        <div class="ej">
            <h2>Ejercicio 7</h2>
            <p>Crea una función que concatene todas las cadenas pasadas como parámetro utilizando el primer parámetro como seprador. PRUEBAS: Escribe una web que llame a la función 3 veces con cadenas.</p>
            <div class="resul">
                <p><?= concatenar(" ", "Hola", "mundo", "!")?></p>
                <p><?= concatenar(".", "Esto", "son", "varias", "cadenas")?></p>
                <p><?= concatenar(";", "manolo", "felipe", "juan", "pepe", "paco", "nacho")?></p>
            </div>
        </div>

        <div class="ej">
            <h2>Ejercicio 8</h2>
            <p>Crea una función que genere un array asociativo que contenga información de los parámetros. La función irá descubriendo los tipos.</p>
            <div class="resul">
                <p><?=printeoCool(analizarParametros(3, "h", 'hola', [1,2,3], [1], "h", true, 4, 5, false, "caca", true))?></p>
            </div>
        </div>

        <div class="ej">
            <h2>Ejercicio 9</h2>
            <p>Crea una función que reciba dos variables cualesquiera e intercambie su valor. Las variables tendrá ese valor fuera de la función. PRUEBA: Crea una web en la que se muestre cómo se comporta esta función con variables de distinto tipo.</p>
            <div class="resul">
                <p>
                    Var1: <?=$var1=5?> - Var2: <?=$var2="Hola"?><br>
                    <?php intercambiar($var1, $var2)?>
                    Var1: <?=$var1?> - Var2: <?=$var2?>
                </p>
            </div>
        </div>

        <div class="ej">
            <h2>Ejercicio 10</h2>
            <p>Crea una función que genera un array aleatorio con parámetros variables.</p>
            <div class="resul">
                <p>
                    <?= printeoCool(crearVararg());
                        printeoCool(crearVararg(5));
                        printeoCool(crearVararg(5, 50));
                        printeoCool(crearVararg(5, 50, -50)); ?>
                </p>
            </div>
        </div>

        <div class="ej">
            <h2>Ejercicio 11</h2>
            <p>Crea una función que reciba un array con distintos tipos de valores y en función de su tipo aplique diferentes operaciones.</p>
            <div class="resul">
                <p>
                    <?= printeoCool(tipos([2,5,7,"pEpA", 3.5, true])); ?>
                </p>
            </div>
        </div>

        <div class="ej">
            <h2>Ejercicio 12</h2>
            <p>Crea una función que reciba un array con información de un usuario y escriba un formulario relleno. En este caso solo utiliza campos de texto o enteros. NOTA: Utiliza las funciones array_map o array_walk</p>
            <div class="resul">
                <?= formatFormUser($info); ?>
            </div>
        </div>

        <div class="ej">
            <h2>Ejercicio 13</h2>
            <p>Crea una función para escribir select de HTML, la función recibe un asociativo con el nombre y el value, también recibe el elemento seleccionado. como un entero (que representa su value).</p>
            <div class="resul">
                <?= genera_select($opciones, 56); ?>
            </div>
        </div>


    </div>
</body>
</html>