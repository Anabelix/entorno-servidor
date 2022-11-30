<?php
    spl_autoload_register(function ($class) {
        $file = str_replace('\\', '/', $class);
        echo("./${file}.php");
    });

    $examen1 = new ExamenFacil();
    echo $examen1->obtenerNota();
    $examen2 = new ExamenChungo();
    echo $examen2->obtenerNota();
    $examen3 = new ExamenHP();
    echo $examen3->obtenerNota();
?>
