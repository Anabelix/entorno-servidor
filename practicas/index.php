<?php
function pintar ($array) {
    echo "<table>";
    echo "<tr><th>TABLE</th><th>VALOR</th></tr>";
    foreach ($array as $clave => $valor) {
        echo "<tr><td>".$clave."</td><td>".$valor."</td></tr>";
    }
    echo "</table>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bucle final</title>
    <style>
        table, th, td {
            border-collapse: collapse;
            border:1px solid black;
        }
        table {
            width:30%;
        }

        th,td {
            padding:1%;
        }
    </style>
</head>
<body>
    <?=pintar($_GET)?>
</body>
</html>