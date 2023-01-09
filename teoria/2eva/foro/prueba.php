<?php
$comentarios = [
    "Sed condimentum euismod eros, eu faucibus risus vulputate non. Sed at orci vitae mauris facilisis semper. Suspendisse et leo eget ante tempor tincidunt nec vitae felis. Cras turpis eros, vestibulum id nulla vitae, iaculis pretium enim. Nunc vel elit et urna volutpat posuere. Integer cursus, mauris ut pulvinar ultrices, turpis est sodales diam, et cursus sapien ex vel velit. Ut cursus placerat ipsum nec rutrum.",

    "Cras ac neque vel est gravida dictum ac quis ex. Sed mauris est, accumsan varius fringilla a, venenatis id turpis. Maecenas et elit eu nibh tincidunt sodales. Mauris at risus venenatis, tempus purus eget, sagittis dui. Maecenas id tempus metus, sed pharetra tellus. Praesent ac libero eget justo eleifend commodo eget porta leo. Nulla volutpat in dolor sed maximus.",

    "Donec laoreet magna ex, vel ultrices odio vulputate pellentesque. Proin efficitur maximus libero, vitae commodo nibh dapibus ut. Suspendisse nulla lectus, tincidunt ac cursus fringilla, viverra eget nisl. Duis hendrerit neque ut tempor auctor. Aenean ut enim interdum, faucibus neque eu, tempus ipsum. Morbi quis aliquet purus. Integer non semper neque. Nullam lacinia mi neque, maximus dignissim arcu dictum vel. Curabitur fringilla arcu cursus felis dictum elementum.",

    "Vestibulum in laoreet magna. Suspendisse quis congue dolor. Duis ultrices augue ut lectus convallis elementum. Praesent sodales faucibus libero, sit amet tincidunt eros aliquet at. Praesent a neque diam. Aenean congue sapien vitae ligula condimentum, vitae lobortis diam facilisis. Ut at sapien dolor. Nulla dignissim nisl lacinia, hendrerit erat eget, efficitur ipsum. Pellentesque convallis felis sed libero porta, ut ultricies diam malesuada.",

    "In id eros faucibus, ultrices lorem non, dapibus nunc. Proin id iaculis risus. Suspendisse potenti. Nunc faucibus elementum leo et malesuada. Aenean pulvinar quis sem vel commodo. Fusce vel justo facilisis, malesuada leo non, placerat augue. Praesent egestas ac sem ac pellentesque. Curabitur ac leo eu ligula accumsan ultrices eu id mauris. Etiam dignissim elit lacus, sed suscipit purus sollicitudin sit amet. Phasellus volutpat dui ut lectus viverra, malesuada auctor mauris congue. In hac habitasse platea dictumst.",

];

function pintar ($comentarios) {
    foreach ($comentarios as $key => $value) {
        echo '<div class="tw"><p>'.$value.'</p></div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prueba.css">
    <title>prueba</title>
</head>
<body>
    <div class="contenedor">
        <?=pintar($comentarios)?>
    </div>
</body>
</html>