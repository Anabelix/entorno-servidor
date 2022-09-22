<?php
    $numVocales=0;
    $numConsonantes=0;
    $esPalindromo=false;
    $comparacion="";

    if (isset($_GET['palabra'])) {
        $p = $_GET['palabra'];
        $mostrar = true;

        for ($i=0; $i<strlen($p); $i++) {
            if ($p[$i] == "a" || $p[$i] == "e" || $p[$i] == "i" || $p[$i] == "o" || $p[$i] == "u") {
                $numVocales++;
            } else {
                $numConsonantes++;
            }
        }

        for ($j=1; $j<strlen($p)/2; $j++) {
            $comparacion.(substr($p, $j));
        }
        echo $comparacion;
    } else {
        $p='';
        $mostrar = false;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio cadenas</title>
    <style>
        .resumen {
            display: none;
        }
    </style>

</head>
<body>
    <form action="ejercicio_cadenas.php" method="get">
        <p>Introduce una palabra: 
            <input type="text" name="palabra" value="<?=$p?>">
            <input type="submit" value="Enviar">
        </p>
    </form>
    <div class="<?=$resumen?>">
        <ul>
            <li>Número de vocales: <?=$numVocales?></li>
            <li>Número de consonantes: <?=$numConsonantes?></li>
            <li>¿Es palíndromo? </li>
        </ul>
    </div>
</body>
</html>