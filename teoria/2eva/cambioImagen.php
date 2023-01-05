<?php
$imagen="";
$imagenes=[
    'sf9'=>'sf9', 
    'stray Kids'=>'skz', 
    'everglow'=>'evg'
];
if (isset($_POST['imagenes'])) {
    $fondo = $_POST['imagenes'];
    setcookie('imagen', $_POST['imagenes']);
} else {
    if (isset($_COOKIE['imagen'])) {
        $fondo = $_COOKIE['imagen'];
    } else {
        $fondo = 'black';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondo</title>
    <style>
        body {
            background-image: url("<?=$fondo?>.jpeg");
            background-size:cover;}
        label {color: #FFF;}
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="imagen">Selecciona una imagen: </label>
        <select name="imagenes" id="imagenes">
        <?php array_walk($imagenes, function($value, $key, $imagen) {
            $sele=($imagen==$value)?"selected":"";?>
            <option value="<?=$value?>" <?=$sele?>><?=ucfirst($key)?></option>
        <?php }, $_POST['imagenes']) ?>
        </select>
        <input type="submit" value="Cambiar imagen de fondo" name="enviar">
    </form>
</body>
</html>