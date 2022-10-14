<?php
$tareas = [
  'Pelar mandarinas',
  'Comer comida',
  'Beber bebida',
  'Recoger título',
  'Cobrar salario',
  'Barrer casa',
  'Fregar casa',
  // Añade más
];
$minions = [
  'Oto',
  'Gah',
  'Bru',
  // Opcional
];
$minionsTareas = [];

function asignarTareas () {
    global $tareas, $minions;
    for ($i=0; $i<count($tareas); $i++) {
    for ($j=0; $j<count($minions); $j++) {
        $minionsTareas[$tareas[$i]]=$minions[array_rand($minions, 1)];
        }
    }
    
    return $minionsTareas;
}

print_r($minionsTareas);
/*$tareas_diarias=[
    "Lunes"=>asignarTareas(),
    "Martes"=>asignarTareas(),
    "Miercoles"=>asignarTareas(),
    "Jueves"=>asignarTareas(),
    "Viernes"=>asignarTareas(),
    "Sabado"=>asignarTareas(),
    "Domingo"=>asignarTareas(),
    ];*/
$tareas_diarias = [
    ["Lunes", "Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"],
    [asignarTareas(), asignarTareas(), asignarTareas(), asignarTareas(), asignarTareas(), asignarTareas(), asignarTareas()]
    ];
print_r($tareas_diarias[0]);
print_r($tareas_diarias[1]);

echo "<tr>";
for ($j=0; $j<count($tareas_diarias[0]); $j++) {
        echo "<th>".$tareas_diarias[0][$j]."</th>";
}
echo "</tr>";
echo "<tr>";
for ($i=0; $i<count($tareas_diarias[1]); $i++) {
        echo "<td>".$tareas_diarias[1][$i]."</td>";
}
echo "</tr>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border-collapse:collapse; 
            border:1px solid black;
            text-align: center;
        }
        table {
            width: 50%;
        }
        th, td{
            padding:1%;
        }
    </style>
</head>
<body>
    
</body>
</html>