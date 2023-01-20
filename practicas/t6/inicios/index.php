<?php
/*     echo "<pre>";
    print_r($_GET);
    echo "</pre>"; */
    
    if ($_GET['verificado']=='si') {
        setcookie('verificado', $_GET['verificado']);
        header("Location: redirigido.php"); //Todas las caebeceras tienen que estar antes que el resto del contenido
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="politica.css">
    <title>Hola</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="<?php echo (isset($_COOKIE['verificado']))?"redirigido.php":""?>">Acceso</a>
    <?php
        if (!isset($_COOKIE['verificado'])) {
            echo "<div class='cookie'><a href='index.php?verificado=si'>Aceptar</a> <a href='index.php?verificado=no'>Rechazar</a></div>";
        }
    ?>
</body>
</html>