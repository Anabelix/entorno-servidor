<?php
    class BancoMaloMalisimo implements IPlataformaPago
    {
        public function estableceConexión():bool {
            print "Conexion BancoMaloMalisimo - ";
            return true;
        }
        public function compruebaSeguridad():bool {
            print "Conexion segura BancoMaloMalisimo - ";
            return true;
        }
        public function pagar(string $cuenta, int $cantidad) {
            print "Pago realizado BancoMaloMalisimo ";
        }
    }
    
?>