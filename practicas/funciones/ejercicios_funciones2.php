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

$persona1 = ["Anabel", "Pedrajas", "651081722", "anabelpedrajas@hotmail.com"];
$persona2 = ["Alvaro", "Nieves", "682153798", "mryetireturns@gmail.com"];
$persona3 = ["Miguel", "Torres", "609908088", "migueltorres@hotmail.com"];
$persona4 = ["Paloma", "Navarro", "659106617", "palomanv59@hotmail.com"];

$personas = array_merge([$persona1], [$persona2], [$persona3], [$persona4]);


echo '<table>';
echo '<tr><th>Nombre</th><th>Apellido</th><th>Telefono</th><th>Correo</th></tr>';
for ($f=0; $f<count($personas); $f++) {
    echo '<tr>';
    for ($c=0; $c<count($personas[$f]); $c++) {
        echo '<td>'.$personas[$f][$c].'</td>';
    }
    echo '</tr>';
}

$edades=[ "25","22 ","24 ","29 ", "26","23","20","19","26","19","20","23"];
$colores=["azul", "verde", "rojo"];
$p26=["mayor","26"];
for ($i=0; $i<count($edades); $i++) {
    if ($edades[$i]<"23") {
        $edades[$i]=$colores;
    } elseif ($edades[$i]=="26") {
        $edades[$i]=$p26;
    }
}

var_dump($edades);

function apartadoTres ($array, $valor, $mensaje) {
    
    if (in_array($valor, $array)) {
        echo "Se ha encontrado el valor en la posicion: ".print_r(array_keys($array, $valor));
    } else {
        echo $mensaje;
    }
}

apartadoTres([1,2,3,4], 2, "Valor 2 no encontrado");
echo "<br>";
apartadoTres([1,2,3,4], 7, "Valor 7 no encontrado");
echo "<br>";

$parrafo = "EOF En la década de 1920 Satyendra Nath Bose y Albert Einstein publican conjuntamente un artículo científico acerca de los fotones de luz y sus propiedades Bose describe ciertas reglas para determinar si dos fotones deberían considerarse idénticos o diferentes Esta se llama la condensado' de Bose - Einstein Einstein aplica estas reglas a los átomos preguntándose cómo se comportarían los átomos de un gas si se les aplicasen estas reglas EOF";
$posCoincidencia = strpos($parrafo, "fotones");
if ($posCoincidencia == true) {
    print_r(explode("fotones", $parrafo)[0]." fotones.");
} else {
    echo '<p>No encontrado</p>';
}

echo "<br>";
$frase="Mateo, Marcos, Lucas, Pedro, Max, Philip, Lucer, Robert, Maximiliano, Roberto, Pedro, Wenceslao, Teodoro, Mateo, Felipe, Petra, Lucer, Jose, Armando, Simón, Nicéforo, Jose, Felipe";
$convertida=explode(" ", $frase);
$sinDuplicados=array_unique($convertida);
print_r($convertida);
echo "<br>";
print_r($sinDuplicados);

echo '<br>';
$numeritos = [];
echo '<br>';

for ($i=1; $i<=20; $i++) {
    $numeritos[]=$i;
}
print_r($numeritos);
echo "<br>";
$pares=array_filter($numeritos, fn($num)=>$num%2==0);
$impares=array_filter($numeritos, fn($num)=>$num%2!=0);
print_r($pares);
echo "<br>";
print_r($impares);
echo "<br>";

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