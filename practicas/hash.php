<?php

    set_time_limit(7200);
    $hash = "$2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72";
    
    // echo password_hash($valor, PASSWORD_DEFAULT)."\n";
    $descubierta=false;
    while ($descubierta==false) {
        for ($i=97; $i<123; $i++) {
            for ($j=97; $j<123; $j++) {
                for ($k=97; $k<123; $k++) {
                    for ($l=97; $l<123; $l++) {
                        $palabra=chr($i).chr($j).chr($k).chr($l);
                        
                        if (password_verify($palabra, $hash)) {
                            $descubierta = true;
                        }
                    }
                }
            }
        }
    }

    echo $palabra;
?>