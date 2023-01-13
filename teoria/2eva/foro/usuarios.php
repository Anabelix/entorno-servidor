<?php
function sentenciaDate ($user, $mensaje, $fecha) {
    echo "INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('".$user ."', '".$mensaje."', ".strtotime($fecha).");";
}
/* sentencia('francis', 'holaaa me uno al grupo', '-3 hours'); */


function sentenciaDos ($user, $mensaje, $fecha) {
    echo "INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('".$user ."', '".$mensaje."', ".$fecha.");<br>";
}
sentenciaDos('francis','holaaa me uno al grupo',1673466354);
sentenciaDos('francis','He tenido que actualizar la base de datos lol, que pereza la vdd. Queda aun realizar la pagina de perfil xdd',1673477403);
sentenciaDos('alvaro','hola genteee, soy alvaro',1673477627);
sentenciaDos('anabel','hoy no es noche de kdramas :(',1673477702);
sentenciaDos('miguel96','yo soy yo y mis circunstancias',1673477827);
sentenciaDos('anabel','Un poquito de lorem ipsum: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s.',1673478128);
sentenciaDos('alvaro','weno weno ya hice los perfiles oleeeee',1673486577);
sentenciaDos('alvaro','estoy sad :(',1673486593);
sentenciaDos('alvaro','escuchando una nueva ost yasss!!',1673487225);
sentenciaDos('romanXD','ya esta semi doneeeee ole oleeeeee',1673488226);
sentenciaDos('romanXD','a dormir ya ',1673488230);

?>