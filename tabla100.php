<?php 
    $num=10;
    $aux=1;
    
    if ($aux%2==0) 
        echo "<td>caca</td>"
    ;
?>
<html>
    <head>
        <title>Tabla Html</title>
        <style>
            table, tr, td { border: 1px solid black; border-collapse: collapse; text-align: center;}
        </style>
    </head>
    <body>
        <table>
            <?php for($i=0;$i<$num;$i++) { ?>
                <tr>
                    <?php for($j=1;$j<$num;$j++) { ?>
                        <td><?=$aux?></td>
                        <?php $aux++; ?>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>