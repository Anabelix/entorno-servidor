<?php
    require('./accesoBases.php');
    // Utilizar la conexión aquí
    $stmt = $dbh->prepare("INSERT INTO Ciclistas (id, nombre, num_trofeos) VALUES (:id,:nombre,:num_trofeos)");
    
    //Aqui mete los datos
    $id = 8;
    $nombre = 'Anabel';
    $num_trofeos = 5;
    
    /* $stmt->setFetchMode(PDO::FETCH_ASSOC); */
    
    //Aqui ejecutas para pegar los valores en la sentencia
    if ($stmt->execute([
        ':id'=>$id,
        ':nombre'=>$nombre,
        ':num_trofeos'=>$num_trofeos
    ])) {
        echo 'Insercción realizada!!!!!';
    } else {
        echo 'Insercción fallida :(';
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
    <title>Document</title>
</head>
<body>
    <a href="insertarTabla.php">Insertar</a>
    <a href="insertar.php">Insertar a mano</a>
    <a href="update.php">Update a mano</a>
    <a href="delete.php">Delete a mano</a>
    <a href="tablaCiclistas.php">Volver a la tabla</a>
</body>
</html>