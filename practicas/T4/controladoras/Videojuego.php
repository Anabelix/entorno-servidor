<?php
    trait Comun 
    {
        private $traitDescripcion;
        private $x;    
        private $y;    
        private $z;
        
        public function getX() { return "Posicion X: ".$this->x." - "; }
        public function setX($x) {$this->x = $x; }
        public function getY() { return "Posicion Y: ".$this->y." - "; }
        public function setY($y) {$this->y = $y; }
        public function getZ() { return "Posicion Z: ".$this->z."<br>"; }
        public function setZ($z) {$this->z = $z; }
        
        public function setDescripcion ($descripcion) {
            $this->traitDescripcion=$descripcion;
        }
        public function getDescripcion () {
            return $this->traitDescripcion;
        }
    }

    interface Personaje 
    {
        public function atacar ();
        public function defender ();
    }

    class Humano implements Personaje
    {
        use Comun;
        public function atacar () {
            print "Puñetazo<br>";
        }
        public function defender () {
            print "Bloqueo<br>";
        }
    }

    abstract class Mago implements Personaje {
        abstract public function atacar ();
        abstract public function defender ();
    }

    class MagoBlanco extends Mago {
        use Comun;
        public function atacar () {
            print "Ataque de luz<br>";
        }
        public function defender () {
            print "Hechizo protector<br>";
        }
    }

    class MagoOscuro extends Mago {
        use Comun;
        public function atacar () {
            print "Ataque de sombra<br>";
        }
        public function defender () {
            print "Hechizo protector<br>";
        }
    }

    class Edificio
    {
        use Comun;
        private $altura;
        public function setAltura ($altura) {
            $this->altura=$altura;
        }
        public function getAltura () {
            return "Altura de: ". $this->altura."<br>";
        }
    }

    class Objeto
    {
        use Comun;
        private $peso;
        public function setPeso ($peso) {
            $this->peso=$peso;
        }
        public function getPeso () {
            return "Peso de: ".$this->peso."<br>";
        }
    }

    $personaje1 = new Humano();
    $personaje1->setX("10");
    $personaje1->setY("0");
    $personaje1->setZ("0");
    print $personaje1->atacar();
    print $personaje1->defender();
    print $personaje1->getX();
    print $personaje1->getY();
    print $personaje1->getZ();
    echo "<hr>";

    $personaje2 = new MagoBlanco();
    $personaje2->setX("5");
    $personaje2->setY("0");
    $personaje2->setZ("5");
    print $personaje2->atacar();
    print $personaje2->defender();
    print $personaje2->getX();
    print $personaje2->getY();
    print $personaje2->getZ();
    echo "<hr>";

    $personaje3 = new MagoOscuro();
    $personaje3->setX("1");
    $personaje3->setY("0");
    $personaje3->setZ("1");
    print $personaje3->atacar();
    print $personaje3->defender();
    print $personaje3->getX();
    print $personaje3->getY();
    print $personaje3->getZ();
    echo "<hr>";

    $objeto = new Objeto();
    $objeto->setDescripcion("Este objeto tiene las siguientes caracteristicas: <br>");
    $objeto->setPeso("30kg");
    $objeto->setX("12");
    $objeto->setY("8");
    $objeto->setZ("4");
    print $objeto->getDescripcion();
    print $objeto->getPeso();
    print $objeto->getX();
    print $objeto->getY();
    print $objeto->getZ();
    echo "<hr>";

    $edificio = new Edificio();
    $edificio->setDescripcion("Este edificio tiene las siguientes caracteristicas: <br>");
    $edificio->setAltura("38 metros");
    $edificio->setX("20");
    $edificio->setY("10");
    $edificio->setZ("0");
    print $edificio->getDescripcion();
    print $edificio->getAltura();
    print $edificio->getX();
    print $edificio->getY();
    print $edificio->getZ();
    echo "<hr>";
?>