<?php
const MIN=0;
const MAX=10;
$enviar='enviar';
session_name('anabelixframework');
session_start();

$intentos=isset($_SESSION['intentos'])?$_SESSION['intentos']:3;

if (!isset($_SESSION['numero'])) {
    $_SESSION['numero']=rand(MIN, MAX);
}

$numero=$_SESSION['numero'];
echo $numero."<br>";
if (isset($_POST['numero'])) {
    if ($numero==$_POST['numero']): echo 'Has acertado<br>';
    elseif ($numero>$_POST['numero']):
        $intentos--;
        $_SESSION['intentos']=$intentos;
        echo 'El numero es mayor<br>';
    else:
        $intentos--;
        $_SESSION['intentos']=$intentos;
        echo 'El numero es menor<br>';
    endif;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Te quedan <?=$intentos?> intentos</h1>
    <form action="" method="post">
        <label for="numero">Adivina el numero entre 0 y 10 con 3 intentos</label>
        <input type="number" name="numero" id="numero" value="<?=$_POST['numero']?>" size="2"><br>
        <input type="submit" value="<?=$enviar?>">
    </form>
</body>
</html>