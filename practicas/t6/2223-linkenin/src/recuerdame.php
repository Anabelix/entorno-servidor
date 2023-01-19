<?php
//si no esta logueado
if (!isset($_SESSION['user']) || $_SESSION['user']=="") {
    if (isset($_COOKIE['recuerdame'])) {
        $db->ejecuta(
            'SELECT nombre, usuarios.id, valor 
            FROM usuarios, tokens 
            WHERE tokens.id = usuarios.id 
            AND valor = ? 
            AND expiracion > NOW()',

            $_COOKIE['recuerdame']
        );

        $tokenInfoDB=$db->obtenElDato();
        print_r($tokenInfoDB);
        if ($tokenInfoDB!=null) {
            $_SESSION['id']=$tokenInfoDB['id'];
            $_SESSION['user']=$tokenInfoDB['nombre'];

            //cookie con tokenInfoDB
            setcookie(
                'recuerdame',
                $tokenInfoDB['valor'],
                time()+(7*24*60*60),
                true
            );

            $db->ejecuta(
                'UPDATE tokens SET expiracion = NOW() + INTERVAL 7 DAY 
                WHERE valor =?',
                $tokenInfoDB['valor']
            );
        }
    }
}
 //Si el usuario presenta una cookie de recuerdame
    //obtengo de la bbdd el usuario de ese token
    //extiendo su vida otra semana
