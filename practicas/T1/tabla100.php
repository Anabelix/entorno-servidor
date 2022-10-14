<?php 
    $num=10;
    $aux=0;
    $esPrimo=true;
    
    function esPrimo ($n) {
        global $esPrimo;
    	if ($n == 0 || $n==1) {
    		$esPrimo == true;
    	} else {
    		$esPrimo==true;
    		$c=2;
    		while ($esPrimo && $c <= ($n/2)) {
    			if ($n%$c==0) {
    			$esPrimo==false;
    			}
    		}
    	}
    	return $esPrimo;
    }
?>
<html>
    <head>
        <title>Tabla Html</title>
        <style>
            table, tr, td { border: 1px solid black; border-collapse: collapse; text-align: center;}
            table {
            width: 50%;
            margin: 0 auto;
            }
            
            .esprimo {
            	background-color: #87c7ff;
            }

            .noprimo {
                background-color: #ff36ff;
            }
        </style>
    </head>
    <body>
        <table>
            <?php for($i=0;$i<$num;$i++) { ?>
                <tr>
                    <?php for($j=0;$j<$num;$j++) { ?>
                        <td <?=(esPrimo($aux))?'class="noprimo"':'class="esprimo"'?>><?=$aux?></td>
                        <?php $aux++;?>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
