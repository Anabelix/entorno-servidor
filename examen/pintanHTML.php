<?php
    $arr = [
        "uno" => 'h',
        "dos" => 'y',
        "tres" => 'j',
    ];
    function pintaHorizontal ($arr) {
        echo "<table>";
        
        $cabecera="";
        $cuerpo="";
        foreach ($arr as $key => $value) {
            echo "<tr>";
            if ($key) {
                $cabecera.="<th>".$key."</th>";
            } else {
                $cuerpo.="<td>".$key."</th></td>";
            }
        }
        echo $cabecera;
        echo $cuerpo;
        echo "</tr>";
        
        echo "</table>";
    }

    pintaHorizontal($arr);
?>