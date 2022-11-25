<?php
    require('./accesoBases.php');
    
    // Utilizar la conexión aquí
    $stmt = $dbh->prepare('SELECT * FROM Ciclistas');
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    
    $cont=0;

    echo "<table>";
    echo "<tr>";
    while ($resultado=$stmt->fetch()) {
        if ($resultado['id']) $redireccion = $resultado['id'];
        echo '<td><a href="detalle.php?id='.$redireccion.'">'.$resultado['nombre'].'</a></td>';
            if ($resultado['num_trofeos']) {
                echo '<td>';
                for ($i=0; $i<$resultado['num_trofeos']; $i++) {
                    echo '<i class="fa-solid fa-trophy"></i>';
                }
                echo '</td>';
            }
        echo "</tr>";
    }
    echo "</table>";

    // Ya se ha terminado; se cierra
    $resultado = null;
    $dbh = null;
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