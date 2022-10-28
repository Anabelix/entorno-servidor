<?php
    namespace Personajes;

    class MagoOscuro extends Mago {
        use \Comun\General;
        public function atacar () {
            print "Ataque de sombra<br>";
        }
    }
?>