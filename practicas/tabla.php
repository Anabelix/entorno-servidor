<?php
$num=5;
$hasta=10;
?>
<html>
    <head>
        <title>Tabla Html</title>
        <style>
            table, thead, tr, td { border: 1px solid black; border-collapse: collapse; text-align: center;}
        </style>
    </head>
    <body>
        <table>
            <thead><tr><td colspan=2>Multiplica</td></tr></thead>
            <tbody>
                <?php for($i=0;$i<=$hasta;$i++) { ?>
                <tr>
                    <td><?php echo $num . " x " . $i ?></td>
                    <td><?php echo $num*$i?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>