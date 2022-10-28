<?php
    class BancoMalvado implements IPlataformaPago
    {
        public function estableceConexión():bool {
            print "Conexion BancoMalvado - ";
            return true;
        }
        public function compruebaSeguridad():bool {
            print "Conexion segura BancoMalvado - ";
            return true;
        }
        public function pagar(string $cuenta, int $cantidad) {
            print "Pago realizado BancoMalvado ";
        }
    }
    
?>