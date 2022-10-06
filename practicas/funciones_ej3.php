<?php
    $usuarios = [
        "jorge" => "1234",
        "amparo" => "admin",
        "mary" => "",
    ];
    /*Apartado A*/
    function imprimirHehe ($item, $key) {
        echo "Nombre: ".$key." - Contraseña: ".$item."<br>";
    }

    array_walk($usuarios, "imprimirHehe");
    echo "<hr>";
    
    /*Apartado B*/
    function encriptar ($usuarios) {
        return (password_hash($usuarios, PASSWORD_DEFAULT));
    }

    $arrayHasheada = array_map("encriptar", $usuarios);
    array_walk($arrayHasheada, "imprimirHehe");

    /*Apartado C*/
    function impresionDos ($usuarios) {
        if ($usuarios=="") {
            $usuarios="tmp2022";
        }
        return (password_hash($usuarios, PASSWORD_DEFAULT));
    }

    $arrayHasheada = array_map("encriptar", $usuarios);
    array_walk($arrayHasheada, "imprimirDos");


    /*Apartado D*/
    echo "<hr>";
    array_walk($usuarios, function ($item, $key) {
        if ($item=="") {
            $item="tmp2022";
        }
        echo "Nombre: ".$key." Contraseña: ".$item."<br>";
    });

?>