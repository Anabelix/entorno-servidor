<?php
    namespace Personajes;
    use Comun\Personaje;
    
    abstract class Mago implements Personaje {
        abstract public function atacar ();
        public function defender () {
            print "Hechizo protector<br>";
        }
    }
?>