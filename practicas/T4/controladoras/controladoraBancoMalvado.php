<?php
    require('../clases/IPlataformaPago.php');
    require('../clases/BancoMalvado.php');
    require('../clases/BancoMaloMalisimo.php');
    require('../clases/BitCoinConan.php');
    /*$pago = new BancoMalvado();
    print $pago->estableceConexión()."<br>";
    print $pago->compruebaSeguridad()."<br>";
    print $pago->pagar("0001X", 30);*/

    function realizarTransaccion(IPlataformaPago $p, string $cuenta, int $cantidad)
    {
        $p->estableceConexión();
        $p->compruebaSeguridad();
        $p->pagar($cuenta, $cantidad);
    }

    $pago1 = new BancoMalvado();
    $pago2 = new BancoMaloMalisimo();
    $pago3 = new BitCoinConan();

    $pagos = [$pago1, $pago2, $pago3];
    $p=array_rand($pagos, 1);

    realizarTransaccion($pagos[$p], "0001XX", 40);
?>