<?php
class CuentaBancaria {
    private static $numeroCuenta=100001;
    private $nombre;
    private $saldo;

    public function __construct($nombre='anonimo', $saldo=0) {
        $this->numeroCuenta++;
        $this->nombre = $nombre;
        $this->saldo = $saldo;
    }

    public function mostrar() {
        return "Nombre: ".$this->nombre." Nº Cuenta: ".$this->numeroCuenta." Saldo: ".$this->saldo;
    }

}
?>