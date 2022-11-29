<?php
/* Ejercicio 3: ARRAY_WALK, ARRAY_MAP, ARRAY_REPLACE */
    $usuarios = [
        "jorge" => "1234",
        "amparo" => "admin",
        "mary" => ""
    ];

    /*----------------------------Apartado A--------------------------*/
    function imprimirHehe ($item, $key) {
        echo "<b>Nombre:</b> ".$key." - <b>Contraseña:</b> ".$item."<br>";
    }

    /*----------------------------Apartado B--------------------------*/
    function encriptar ($usuarios) {
        return (password_hash($usuarios, PASSWORD_DEFAULT));
    }

    $arrayHasheada = array_map("encriptar", $usuarios);

    /*----------------------------Apartado C--------------------------*/
    function impresionHash ($usuarios) {
        if ($usuarios=="") {
            $usuarios="tmp2022";
        }
        return (password_hash($usuarios, PASSWORD_DEFAULT));
    }

    $ahCompleta = array_map("impresionHash", $arrayHasheada);

    /*----------------------------Apartado D--------------------------*/
    function reemplazoEncriptado ($item, $key) {
        if ($item=="") {
            $item="tmp2022";
        }
        echo "<b>Nombre:</b> ".$key." - <b>Contraseña:</b> ".$item."<br>";
    }
?>