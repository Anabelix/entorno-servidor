<?php
    require('../clases/Coche.php');
    require('../clases/CocheConRemolque.php');
    require('../clases/CocheGrua.php');

    $coches = [];

    $coche1 = new Coche ();
    $coche1->setMatricula("1000")->setMarca("BMW")->setCarga(30);
    
    $coche2 = new CocheConRemolque ();
    $coche2->setMatricula("1001")->setMarca("Renault")->setCarga(30);
    $coche2->setCapacidadRemolque("200");

    $coche3 = new Coche ();
    $coche3->setMatricula("1002")->setMarca("Porsche")->setCarga(40);

    $coche4 = new CocheGrua ();
    $coche4->setMatricula("1003")->setMarca("Renault")->setCarga(20);
    $coche4->cargar($coche3);

    $coche5 = new CocheGrua ();
    $coche5->setMatricula("1004")->setMarca("Audi")->setCarga(20);
    $coche5->cargar($coche2);

    $cocheCaca = new CocheGrua ();
    $cocheCaca->setMatricula('2000')->setMarca('caca')->setCarga(30);

    array_push($coches, $coche1, $coche4, $coche5, $cocheCaca);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="controladoraCoche.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Secular+One&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <title>Coches</title>
</head>
<body>
    <div class="contenedor">
        <h1>COCHES</h1>
        <?php array_walk($coches, function($value, $key) { ?>
                <div class='info'><h2>COCHE <?=$key+1?></h2><?=$value->pintarInfo()?></div>
        <?php }) ?>
    </div>
</body>
</html>