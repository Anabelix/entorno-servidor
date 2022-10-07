<?php
    $productos = [
        "naranja" => 1.2,
        "manzana" => 1.5,
        "pera" => 1.8,
        "platano" => 0.8,
        "kiwi" => 0.75,
        "macarrones" => 0.5,
        "arroz" => 0.75,
        "salchichas" => 1,
        "patatas_fritas" => 3,
        "paninis" => 1.5,
        "leche_6_uds" => 5,
        "pizza_jamon_serrano" => 2.59,
        "helado_chocolate" => 2.99
    ];
    $cantidad=0;
    $nombre;

    if (isset($_GET['cantidad'])) {
        $cantidad=$_GET['cantidad'];
    } else {
        $cantidad=0;
    }

    

    function imprimirProductos ($productos) {
        global $nombre;

        echo "<table>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Precio</th>";
        echo "<th>Cantidad</th>";
        echo "</tr>";
        for ($i=0; $i<sizeof($productos); $i++) {
            echo "<tr>";
            $nombre=key($productos);
            $precio=$productos[key($productos)];
                echo "<td>".$nombre."</td>";
                echo '<td><label for="'.$nombre.'">'.$precio.'</label></td>';
                echo '<td><input type="number" value="'.empty($_GET)?0:$_GET['cantidad'].'" name="cantidad" min="0" max="10"></td>';
            echo "</tr>";
            next($productos);
        }
        echo "</table>";
    }
    
    function calcularTotal () {
        if ($cantidad!=0) {
            $precio=($productos[key($productos)]);
        }
        $total=($cantidad*$precio);

        echo $total;
    }


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_funciones5.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <form action="funciones_ej5.php" method="get">
        <?=imprimirProductos($productos)?>
        <input type="submit" value="Enviar">
        <p><?=calcularTotal()?></p>
    </form>
    
</body>
</html>