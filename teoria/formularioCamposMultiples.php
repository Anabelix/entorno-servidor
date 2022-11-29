<?php
    require('printeoRechulon.php');
    printeoMono($_POST, "POST");
    echo "<br>";
    echo "<br>";

    $pasatiempos=$_POST['pasatiempos'];
    $opcPasatiempos = ["Escuchar musica", "Leer", "Ver series", "Hacer deporte", "Hacer manualidades"];
    if (isset($_POST['enviar'])) {
        if (isset($_POST['pasatiempos'])) {
            if (!empty($_POST['pasatiempos'])) {
                $pasatiempos = $_POST['pasatiempos'];
    
                echo 'Numero total de pasatiempos seleccionados: '.count($pasatiempos)."<br>";
                echo 'Pasatiempos seleccionados:'; 
                echo "<ol>";
                foreach ($pasatiempos as $key => $value) {
                    echo '<li>'.$value.'</li>';
                }
                echo "</ol>";
            } 
    } else {
        $errores['pasatiempos']="*Debes seleccionar al menos una opción.";
    }
}
    echo "<hr>";


    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campos Multiples</title>
    <style>
        p {
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    <label for="pasatiempos">Selecciona tus pasatiempos favoritos:</label><br>
        <?php
        $sele;
            foreach ($opcPasatiempos as $value) {  
                if (!empty($_POST['pasatiempos'])) {
                    $sele=(in_array($value, $_POST['pasatiempos']))?"checked":"";
                }
                    echo "$value <input type='checkbox' name='pasatiempos[]' value='$value' id='' $sele><br>";
            }
        ?>
        <?php
            if (isset($errores['pasatiempos'])) {
                echo "<p>".$errores['pasatiempos']."</p>";
            }
        ?>
        <br><input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>