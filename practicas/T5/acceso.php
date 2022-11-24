<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=mibasededatos', "anabel", "1234");
    
    // Utilizar la conexión aquí
    $resultado = $mbd->query('SELECT * FROM Ciclistas');
    $resultado->setFetchMode(PDO::FETCH_ASSOC);
    $cont=0;

    echo "<table>";
    echo "<tr>";
    foreach ($resultado as $fila){
        if ($fila['id']) $redireccion = $fila['id'];
        echo '<td><a href="detalle.php?id='.$redireccion.'">'.$fila['nombre'].'</a></td>';
            if ($fila['num_trofeos']) {
                echo '<td>';
                for ($i=0; $i<$fila['num_trofeos']; $i++) {
                    echo '<i class="fa-solid fa-trophy"></i>';
                }
                echo '</td>';
            }
        echo "</tr>";
    }
    echo "</table>";

    // Ya se ha terminado; se cierra
    $resultado = null;
    $mbd = null;

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6a4d1fb5aa.js" crossorigin="anonymous"></script>
    <style>
        table, th, tr, td {
            border-collapse:collapse;
            border:1px solid #FFF;
        }
        td:nth-of-type(2) {
            text-align:center;
        }
    </style>
    <title>Document</title>
</head>
<body>
    
</body>
</html>