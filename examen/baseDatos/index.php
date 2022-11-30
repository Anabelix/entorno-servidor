<?php
    require('./accesoBases.php');
/*     echo "<pre>";
    print_r($_SERVER);
    echo "</pre>"; */
    // Utilizar la conexión aquí
    $lastId="";
    $stmt = $dbh->prepare('SELECT * FROM Logs');
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    
    $resultado = $dbh->query('SELECT id FROM Logs');
    $resultado->setFetchMode(PDO::FETCH_ASSOC);
    foreach ($resultado as $key => $value) {
        $lastId = $value['id'];
    }
    
    $lastId++;
    $insert = $dbh->prepare("INSERT INTO Logs (id, navegador, timestamp) VALUES (:id,:navegador,:fecha)");
    $id = $lastId;
    $navegador = explode(" ", $_SERVER['HTTP_USER_AGENT'])[0];
    $fecha = time();

    if ($insert->execute([
        ':id'=>$lastId,
        ':navegador'=>$navegador,
        ':fecha'=>$fecha
    ])) {
        echo"<p>Hola Mundo!</p>";
        /* echo 'Insercción realizada!!!!!'; */
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
    <title>Navegador</title>
</head>
<body>
</body>
</html>