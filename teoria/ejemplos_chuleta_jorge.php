<?php
    try {
        $nombre = 'mysql:host=localhost;dbname=mibasedatos';
        $usuario = 'nataly';
        $psswd='1234';
        $mbd = new PDO($nombre, $usuario, $psswd);

        //SELECTS
        selectAll($mbd);
        selectWhere($mbd);
        insert($mbd);
        update($mbd);


        $baseDatos = null;
        $mbd = null;

    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "\n";
        die();
    }

    function selectAll($mbd)
    {
        $baseDatos = $mbd->prepare('SELECT * FROM Ciclistas');
        $baseDatos->setFetchMode(PDO::FETCH_ASSOC);
        $baseDatos->execute();
        ?>
        <table>
            <caption>select all</caption>
            <th>ALL</th>
        <?php
        foreach ($baseDatos as $valor) {?>
            <tr>
                <td><?=$valor['id'] ?></td>
                <td><?=$valor['nombre'] ?></td>
                <td><?=$valor['num_trofeos'] ?></td>
            </tr>
        <?php } ?>
        </table>
        <br>
        <?php
    }

    function selectWhere($mbd)
    {
        $id=2;
        $baseDatos = $mbd->prepare("SELECT * FROM Ciclistas WHERE id = $id");
        $baseDatos->setFetchMode(PDO::FETCH_ASSOC);
        $baseDatos->execute();

        ?>
        <table>
            <caption>Select where</caption>
            <th>WHERE</th>
        <?php
        foreach ($baseDatos as $valor) {?>
            <tr>
                <td><?=$valor['id'] ?></td>
                <td><?=$valor['nombre'] ?></td>
                <td><?=$valor['num_trofeos'] ?></td>
            </tr>
        <?php } ?>
        </table>
        <br>
        <?php
    }

    function insert($mbd)
    {
        $insert = $mbd->prepare("INSERT INTO Ciclistas (id, nombre, num_trofeos) VALUES (:id, :nombre, :num_trofeos)");
        $id = 7;
        $nombre = 'Oscar';
        $numTrofeos = '4';
        //metodo de pasarlo con un array
        if ($insert->execute(array(':id'=>$id, ':nombre'=>$nombre, ':num_trofeos'=>$numTrofeos))) {
            echo "Se ha creado el nuevo registro!";
        }

        //value hace que se guarde el primer nombre que le hayas puesto, no se sobrescribe
        // $insert->bindValue(':id', $id);
        // $insert->bindValue(':nombre', $nombre);
        // $insert->bindValue(':num_trofeos', $num_trofeos);
        // function update($mbd) { }
    }
?>
