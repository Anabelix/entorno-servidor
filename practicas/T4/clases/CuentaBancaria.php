<?php
class CuentaBancaria {
    private static $contCuenta = 10001;
    private $numCuenta;
    private $nombre;
    private $saldo;

    public function __construct($nombre='anonimo', $saldo=0) {
        $this->numCuenta = ++self::$contCuenta;
        $this->nombre = $nombre;
        $this->saldo = $saldo;
    }

    public function setNombre ($nombre) {
        $this->nombre=$nombre;
    }
    
    public function getNombre () {
        return $this->nombre;
    }     

    public function getNumCuenta () {
        return $this->numCuenta;
    }    

    public function setSaldo($saldo) {
        $this->saldo=$saldo;
    }
    
    public function getSaldo() {
        return $this->saldo;
    }  

    /* ------------------------------OTROS METODOS----------------------------- */
    public function ingresar (float $cantidad) {
        $this->saldo+=$cantidad;
    }

    public function retirar (float $cantidad) {
        $this->saldo-=$cantidad;
    }

    public function transferirA ($cuentaBancaria, $cantidad) {
        $this->saldo-=$cantidad;
        $cuentaBancaria->ingresar($cantidad);

        return "Se han transferido $cantidad euros a la cuenta $cuentaBancaria->numCuenta <br>El saldo actual de tu cuenta es: $this->saldo <br>Y el de la otra cuenta es: $cuentaBancaria->saldo";
        
    }

    public function unirCon ($cuentaBancaria) {
        $this->saldo += $cuentaBancaria->saldo;
        $cuentaBancaria->saldo = 0;
        $cuentaBancaria->numCuenta = -1;

        return "Se te ha traspasado el saldo de a tu cuenta. Ahora posees un saldo de: $this->saldo";
    }

    function bancarrota () {
        $this->saldo=0;
    }

    public function mostrar() {
        return "Nombre: ".$this->nombre." Nº Cuenta: ".$this->numCuenta." Saldo: ".$this->saldo;
    }
}
?>