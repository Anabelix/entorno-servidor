<?php
    namespace Personajes;

    class MagoBlanco extends Mago {
        use \Comun\General;
        public function atacar () {
            print "Ataque de luz<br>";
        }
    }
?>