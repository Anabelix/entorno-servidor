<?php
function sentencia ($user, $mensaje, $fecha) {
    echo "INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('".$user ."', '".$mensaje."', ".strtotime($fecha).");";
}

sentencia ('anabel', 'hay que darle estilos', '-3 hours');
?>