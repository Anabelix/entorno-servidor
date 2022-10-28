<?php
    namespace Personajes;
    use \Comun\Personaje;
    
    class Humano implements Personaje
    {
        use \Comun\General;
        public function atacar () {
            print "Puñetazo<br>";
        }
        public function defender () {
            print "Bloqueo<br>";
        }
    }
?>