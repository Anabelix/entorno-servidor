<?php
    require('./accesoBases.php');
        // Utilizar la conexión aquí

        $stmt = $dbh->prepare('SELECT * FROM Logs');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        
        $cont=0;
    
        function pintarTabla ($stmt) {
            echo "<table>";
            echo "<tr>";
            while ($resultado=$stmt->fetch()) {
                echo '<td>'.$resultado['id'].'</td>';
                echo '<td>'.$resultado['navegador'].'</td>';
                if ($resultado['timestamp']) {
                    $resultado['timestamp']=date('d M y h:m:s', $resultado['timestamp']);
                }
                echo '<td>'.$resultado['timestamp'].'</td>';
                echo "</tr>";
            }
            echo "</table>";
        }
        
    
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
    <style>
        table, th, tr, td {
            border-collapse:collapse;
            border:1px solid red;
            text-align:center;
        }
        table {width:100%;}
    </style>
    <title>Tabla Bases</title>
</head>
<body>
    <?=pintarTabla($stmt)?>
</body>
</html>