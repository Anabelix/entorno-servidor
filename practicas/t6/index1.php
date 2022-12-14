<?php
/*  header("Location: redireccion.php"); //Todas las caebeceras tienen que estar antes que el resto del contenido
    die(); */
    $claro = isset($_COOKIE['claro'])?$_COOKIE['claro']:0;
    setcookie("galleta", "chips");
    setcookie('claro', $claro + 1);
    
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";
?>