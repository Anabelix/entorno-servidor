<?php
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    echo "<hr>";
    print_r($_GET);
    echo "<hr>";
    print_r($_POST);
    echo "<hr>";

    $_SERVER["HTTP_ACCEPT_LANGUAGE"]="ko-KR,ko;q=0.5";
    switch (substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0 , 2)) {
        case 'es':
            print("BIENVENIDO!!!");
            break;
        case 'en':
            print("WELCOME!!!");
            break;
        case 'ko':
            print("어서 오십시오!!!");
            break;
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="http://127.0.0.1:8000/index.php" method="post"> 
    <form action="" method="post">
        Nombre: <input type="text" name="nombre">
        <br>Sexo:<br>
        Hombre:<input type="radio" name="sexo" value="H">
        Mujer:<input type="radio" name="sexo" value="M">
        Otro:<input type="radio" name="sexo" value="O"><br>
        Color fav: <input type="color" name="colorfavorito"><br>
        <textarea name="texto" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Enviar">-->
        <p><?=print "IP DEL CLIENTE: ".$_SERVER["REMOTE_ADDR"]?></p>
        <p><?=print "VERSION: ".$_SERVER["HTTP_USER_AGENT"]?></p>
    </form>
</body>
</html>