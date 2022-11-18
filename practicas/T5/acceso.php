<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=mibasededatos', "anabel", "1234");
    
    // Utilizar la conexión aquí
    $resultado = $mbd->query('SELECT * FROM Ciclistas');
    $resultado->setFetchMode(PDO::FETCH_ASSOC);
    echo "<table>";
    echo "<tr>";
    foreach ($resultado as $fila){
      foreach ($fila as $clave => $valor){

        if(!is_numeric($clave)) {
            /* $num=1;
            if ($num<=1) {
                echo "<td>".$clave."</td>";
                $num=0;
            } */
            echo "<td>".$valor . "</td>";
        }
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
    <style>
        table, th, td {
            border-collapse:collapse;
            border:1px solid black;
        }
    </style>
    <title>Document</title>
</head>
<body>
    
</body>
</html>