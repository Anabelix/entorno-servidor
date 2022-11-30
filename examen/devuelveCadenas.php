<?php
    function pintaCabecera (...$variables) {
        $cabecera = "";
        foreach ($variables as $value) {
            $cabecera .= "<tr><th>".$value."</th></tr>";
        }
        return $cabecera;
    }
    function pintaContenido (...$variables) {
        $contenido = "";
        foreach ($variables as $value) {
            $contenido .= "<tr><td>".$value."</td></tr>";
        }
        return $contenido;
    }

    function pintaHorarioVacio () {
        
    }
?>

