<?php
    require('accesoBases.php');
    $id=$_GET['id'];
        
    $stmt = $dbh->prepare('SELECT * FROM Ciclistas WHERE id=:id');
    $stmt->bindParam(':id', $id);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $resul=$stmt->fetch();
        
    if (empty($resul)) {
        echo "error";
    } else {
        echo "<h1>Información detallada del Ciclista</h1>";
        echo "<p>Id: {$resul["id"]} <br>Nombre: {$resul["nombre"]} <br>Numero de trofeos:";
        for ($i=0; $i<$resul['num_trofeos']; $i++) {
            echo '<i class="fa-solid fa-trophy"></i>';
        }
        echo "</p>";
        
    }

    // Ya se ha terminado; se cierra
    $resultado = null;
    $mbd = null;
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6a4d1fb5aa.js" crossorigin="anonymous"></script>
    <style>
        
    </style>
    <title>Document</title>
</head>
<body>
    
</body>
</html>