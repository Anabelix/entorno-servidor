<?php
//si no esta logueado
if (!isset($_SESSION['user']) || $_SESSION['user'] == "") {
    
    //Si el usuario presenta una cookie de recuerdame
    if (isset($_COOKIE['recuerdame'])) {
        
        //obtengo de la bbdd el usuario de ese token
        $db->ejecuta(
            'SELECT nombre, usuarios.id, valor
            FROM usuarios, tokens
            WHERE tokens.id = usuarios.id
            AND valor = ?
            AND expiracion > NOW()',

            $_COOKIE['recuerdame']
        );

        $tokenInfoDB = $db->obtenElDato();
        
        if ($tokenInfoDB != null) {
            $_SESSION['id'] = $tokenInfoDB['id'];
            $_SESSION['user'] = $tokenInfoDB['nombre'];
        }
        
        //cookie con tokenInfoDB
        //extiendo su vida otra semana
        setcookie(
            'recuerdame',
            $tokenInfoDB['valor'],
            time() + (7 * 24 * 60 * 60),
            true
        );

        //actualizo la bbddd tokens con la nueva vida aumentada
        $db->ejecuta(
            'UPDATE tokens SET expiracion = NOW() + INTERVAL 7 DAY
                WHERE valor =?',
            $tokenInfoDB['valor']
        );
    }
}
