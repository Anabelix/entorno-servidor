<?php
// TODO
// Significa To do    "Por Hacer"
// 

/*

TODO
Se deben definir constantes...
CASILLA_MAX, 3
CASILLA_MIN, 1
JUGADOR_1, 'X'
JUGADOR_2, 'O'

*/

/*
Debes definir una estructura adecuada para este problema
*/
$tablero = [
  ['_', '_', '_'],
  ['_', '_', '_'],
  ['_', '_', '_']
];

if($_GET['reset']) {
  unlink('tablero.txt');
}

if(file_exists('tablero.txt')){
  $tablero = unserialize(file_get_contents('tablero.txt'));
}

print_r($tablero);
print_r($_POST);

$x = "";
$y = "";
$turno = 'X';
$errores = [];

function verificaMargen ($n): bool
{
  return (0 <= $n && $n <= 2);
}

function verificaLibre($x, $y, $tablero): bool
{
  return $tablero[$x][$y] == '_';
}

if(isset($_POST['submit']))
{
    if(isset($_POST['posx']) && $_POST['posx'] != ""){
      $x = $_POST['posx'];
    }else{
      $errores[] = "Introduce X";
    }

    if(isset($_POST['posy']) && $_POST['posy'] != ""){
      $y = $_POST['posy'];
    }else{
      $errores[] = "Introduce Y";
    }

    if(isset($_POST['turno']) && $_POST['turno'] != "") {
      $turno = $_POST['turno'];
    }

    if($y != "" && $x != "") {
      if(!verificaMargen($x) || !verificaMargen($y)){
        $errores[] = "Posición fuera de márgenes";
      }
      if(!verificaLibre($x, $y, $tablero)) {
        $errores[] = "Ocupada";
      }
    }

    if(count($errores) == 0) {
      $tablero[$x][$y] = $turno;
      file_put_contents('tablero.txt', serialize($tablero));
    }
}

function comprueba($tablero) {
    // TODO: Para vuestro fin de semana.
    return rand(0,10)>8;
}


$ganador = false;
if(comprueba($tablero)) {
  $ganador = true;
}

?>





<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
  <title>3 en Raya</title>
</head>
<body>
  <h1>3 en raya</h1>
  <table>
    <?php foreach($tablero as $row) { ?>
      <tr>
      <?php foreach($row as $pos) { ?>
        <td><?=$pos?></td>
      <?php } ?>
      </tr>
    <?php } ?>
  </table>
  <?php foreach($errores as $error) { ?>
    <div class="error"><?=$error?></div>
  <?php } ?>
  
  <?php if($ganador) { ?>
    <div class="error">
      Jugador TODO ha ganado
      <a href="juego.php?reset=true">Juego nuevo</a>
    </div>
  <?php } ?>
  <form action="juego.php" method="post">
      turno:
      <select name="turno">
        <option value="X" <?=($_POST['turno']=='X')?'selected':''?>>X</option>
        <option value="O" <?=($_POST['turno']=='O')?'selected':''?>>O</option>
      </select>
      <br>
      x: <input type="text" name="posx" value="<?=$x?>"><br>
      y: <input type="text" name="posy" value="<?=$y?>"><br>
      <button type="submit" name="submit">Jugar</button>
  </form>
</body>
</html>