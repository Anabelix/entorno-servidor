<?php
    class BitCoinConan implements IPlataformaPago
    {
        public function estableceConexión():bool {
            print "Conexion BitCoinConan - ";
            return true;
        }
        public function compruebaSeguridad():bool {
            print "Conexion segura BitCoinConan - ";
            return true;
        }
        public function pagar(string $cuenta, int $cantidad) {
            print "Pago realizado BitCoinConan ";
        }
    }
    
?>