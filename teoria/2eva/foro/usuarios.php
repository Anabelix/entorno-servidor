<?php
function sentencia ($user, $mensaje, $fecha) {
    echo "INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('".$user ."', '".$mensaje."', ".strtotime($fecha).");";
}

sentencia ('francis', 'holaaa me uno al grupo', '-3 hours');
?>