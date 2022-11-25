<?php
  const MAX_OPC = 3;
  const MIN_OPC = 1;

  const LIMITE = 1;
  $tablero = [  //Y
                ['&nbsp;', '&nbsp;', '&nbsp;'], //X
                ['&nbsp;', '&nbsp;', '&nbsp;'], 
                ['&nbsp;', '&nbsp;', '&nbsp;'], 
             ];
  

  print_r($_POST);
  
  $valorX = $_POST['posx'];
  $valorY = $_POST['posy']; 
  
  if ($tablero[$valorX-LIMITE]=="") {
    echo 'no vacio en la posicion: '.$valorX;
  } else {
    echo 'vacio en la posicion: '.$valorX;
    $tablero[$valorX-LIMITE][$valorY-LIMITE]=$valorX;
  }

/*   echo '<pre>';
  print_r($tablero);
  echo '</pre>'; */


  
    echo '<table>';
    for ($i=0; $i<count($tablero); $i++) {
      echo '<tr>';
      for ($j=0; $j<count($tablero[$i]); $j++) {
        echo '<td>'.$tablero[$i][$j].'</td>';
      }
      echo '</tr>';
    }
    echo '</table>';
  
?>

<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
  <title>3 en Raya</title>
</head>
<body>
  <h1>3 en raya</h1>
  <div class="error">
    Esto es un texto de error
  </div>
  <div class="error">
    Jugador AAA ha ganado
    <a href="">Juego nuevo</a>
  </div>
  <form action="" method="post">
      turno:
      <select name="turno">
        <option value="X" <?=$selected?>>X</option>
        <option value="O" <?=$selected?>>O</option>
      </select>
      <br>
      x: <input type="number" min="<?=MIN_OPC?>" max="<?=MAX_OPC?>" name="posx" value="<?=$valorX?>"><br>
      y: <input type="number" min="<?=MIN_OPC?>" max="<?=MAX_OPC?>" name="posy" value="<?=$valorY?>"><br>
      
      <input type='submit' value='Enviar'>
  </form>
</body>
</html>
