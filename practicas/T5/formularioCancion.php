<?php
    $cancion="";
    $hora=date("h");
    $min=date("i");
    
    $opcionesMinuto = [0, 15, 30, 45];
    $mayores = array_filter($opcionesMinuto, function($m){
        global $min;
        return $m>$min;
    });

    if (empty($mayores)):
        $min=0;
        $hora++;
    else:
        $min=array_shift($mayores);
    endif;

    $errores = [];
    if (isset($_POST['enviar'])) {
        if (isset($_POST['cancion']) && $_POST['cancion']!="") {
            $cancion=ucfirst($_POST['cancion']); 
        } else {
            $errores['cancion']="No puede estar vacío";
        }
        
        if (isset($_POST['hora']) && $_POST['hora']!="") {
            $hora=$_POST['hora']; 
        } else {
            $errores['hora']="No puede estar vacío";
        }
        
        if (isset($_POST['min']) && $_POST['min']!="") {
            $min=$_POST['min']; 
        } else {
            $errores['min']="No puede estar vacío";
        }

        if (count($errores)==0) {
            //Guardo
            file_put_contents (
                "temazos.csv",
                "$cancion;$hora;$min\n",
                FILE_APPEND
            );

            //Redirect
            header("Location: listado.php");

            //Exit
            exit();
        }
    }

    function cleanData($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error p {
            color: red;
        }
    </style>

</head>
<body>
    <form action="" method="post">
        <label for="cancion">Tema</label>
        <input type="text" name="cancion" id="cancion" placeholder="Intro tema" value="<?=$cancion?>">
        <?php
            if (isset($errores['cancion'])) {
                echo '<div class="error">';
                echo '<p>'.$errores['cancion'].'</p>';
                echo '</div>';
            }
        ?>

        <label for="hora">H</label>
        <input type="number" name="hora" max="23" min="0" size="1" id="hora" value="<?=$hora?>">
        <?php
            if (isset($errores['hora'])) {
                echo '<div class="error">';
                echo '<p>'.$errores['hora'].'</p>';
                echo '</div>';
            }
        ?>

        <label for="min">MM</label>
        <select name="min" id="min">
            <?php
                array_walk(
                    $opcionesMinuto,
                    function ($op, $k, $d) {
                        $sel=($op==$d)?"selected":"";
                        echo "<option value='$op' $sel>$op</option>";
                    }, $min
                );
            ?>
        </select>
        <?php
            if (isset($errores['min'])) {
                echo '<div class="error">';
                echo '<p>'.$errores['min'].'</p>';
                echo '</div>';
            }
        ?>

        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>