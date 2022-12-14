<?php
    $data = file_get_contents(
        "temazos.csv"
    );

    $lines = explode("\n", $data);
    array_pop($lines);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            font-weight:500;
        }
        table, th, td {
            width:40%;
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        tr, td, th {
            padding:1%;
        }
        table {
            margin-bottom:2%;
        }
        th {
            background-color: #007e98;
            color: #FFF;
        }
        td:nth-of-type(odd) {
            background-color: rgba(0, 126, 152, 0.7);
            color: #FFF;
        }
        a {
            text-decoration: none;
            padding:1.2%;
            background-color: #007e98;
            color: #FFF;
            border-radius:10px;
        }
        a:hover {
            background-color: rgba(255, 255, 255, 0);
            box-shadow: inset 0px 0px 0px 3px #007e98;
            color: #007e98;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
            <th>Canción</th>
            <th>Hora</th>
            </tr>
        </thead>

        <tbody>
            <?php
                foreach ($lines as $line) {
                    echo '<tr>';
                    $valor = explode (";", $line);
                    echo '<td>'.$valor[0].'</td>';
                    echo '<td>'.$valor[1].':'.$valor[2].'</td>';
                }
                echo '</tr>';
            ?>
        </tbody>
    </table>

    <a href="formularioCancion.php">Intro otra canción</a>
</body>
</html>