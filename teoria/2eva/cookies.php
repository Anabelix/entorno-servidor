<?php
include('../1eva/printeoRechulon.php');
//setcookie( nombre, valor, momento que expira (0 es por defecto));
//0: la cookie solo sera valida mientras el usuario tiene abierto su navegador

$nombre = 'miprimeraGalleta';
$valor = 'Anabel|anabelpedrajas@hotmail.com|29/08/1999';
setcookie($nombre, $valor);
printeoCool($_COOKIE);

//Se elimina la galleta del array pero no del navegador
/* unset($_COOKIE['miprimeraGalleta']);
printeoCool($_COOKIE); */

//Se elimina la galleta pa siempre
/* $duracion = time()-1;
setcookie('miprimeraGalleta', '', $duracion);
printeoCool($_COOKIE); */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border-collapse:collapse;
            border:1px solid;
        }
        th, td {
            padding: 10px;
            width:fit-content;
        }
        th {
            background-color: #EAEAEA;
            text-align:left;
            width: fit-content;
        }
    </style>
</head>
<body>
    <h1>Galletas</h1>
    <?php
    if (isset($_COOKIE['miprimeraGalleta'])) {
        $datos = $_COOKIE['miprimeraGalleta'];
        print $datos."<br>";
        $datos_array['nombre']=explode('|', $datos)[0];
        $datos_array['email']=explode('|', $datos)[1];
        $datos_array['fecha de nacimiento']=explode('|', $datos)[2];
        
        echo '<table>';
        echo '<tr>';
        foreach ($datos_array as $key => $value) {
            echo "<th>".ucfirst($key)."</th><td>$value</td></tr>";
        }  
        echo "</table>";
    } else {
        echo "Se ha borrado o no existe la cookie";
    }?>
</body>
</html>