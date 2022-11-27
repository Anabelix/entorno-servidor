<?php
    require('printeoRechulon.php');
    printeoMono($_POST, "POST");
    echo "<br>";
    echo "<br>";
    if (isset($_POST['pasatiempos'])) {
        if (!empty($_POST['pasatiempos'])) {
            $pasatiempos = $_POST['pasatiempos'];

            echo 'Pasatiempos seleccionados:'; 
            echo '<br>Numero total: '.count($pasatiempos)."<br>";
            echo "<ol>";
            foreach ($pasatiempos as $key => $value) {
                echo '<li>'.$value.'</li>';
            }
            echo "</ol>";
        }

    } else {
        echo "No existe";
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
</head>
<body>
    <form action="" method="post">
        <label for="pasatiempos">Selecciona tus pasatiempos favoritos:</label><br>
        Escuchar música <input type="checkbox" name="pasatiempos[]" id="musica" value="Escuchar musica"><br>
        Leer <input type="checkbox" name="pasatiempos[]" id="leer" value="Leer"><br>
        Hacer deporte <input type="checkbox" name="pasatiempos[]" id="deporte" value="Hacer deporte"><br>
        Ver series y películas <input type="checkbox" name="pasatiempos[]" id="cine" value="Ver series y películas"><br>                
        Videojuegos <input type="checkbox" name="pasatiempos[]" id="videojuegos" value="Videojuegos"><br>                
        Hacer manualidades <input type="checkbox" name="pasatiempos[]" id="manualidades" value="Hacer manualidades"><br>
        

        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>