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
    function conContraseña ($usuarios) {
        return (!($usuarios == ""));
    }

    $arrayContraseña = array_filter($usuarios, "conContraseña");
    
    function sinContraseña ($usuarios) {
        return ($usuarios == "");
    }

    $arraySinContraseña = array_filter($usuarios, "sinContraseña");

    echo "<hr>";
    array_walk($arrayContraseña, "imprimirHehe");

    function imprimirTodo ($item, $key) {
        if ($item=="") {
            echo "Nombre: ".$key." - Contraseña: tmp2022";
        } else {
            echo "Nombre: ".$key." - Contraseña: ".$item."<br>";
        }
        
    }
    array_walk($arraySinContraseña, "imprimirTodo");

    echo "<hr>";
    echo "caca";
    $arrayCC = ["mary"=>"tmp2022"];
    $arrayFinal=array_replace($usuarios, $arrayCC);
    array_walk($arrayFinal, "imprimirHehe");

?>