<?php
    require('./accesoBases.php');
    // Utilizar la conexión aquí
    $stmt = $dbh->prepare("INSERT INTO Ciclistas (id, nombre, num_trofeos) VALUES (:id,:nombre,:num_trofeos)");
    
    //Aqui mete los datos
    $id = 7;
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