<?php
    class Coche 
    {
        private $matricula;
        private $marca;
        private $carga;

        public function getMatricula () {return $this->matricula;}
        public function setMatricula ($matricula) {
            $this->matricula=$matricula;
            return $this;
        }

        public function getMarca () {return $this->marca;}
        public function setMarca ($marca) {
            $this->marca=$marca;
            return $this;
        }

        public function getCarga () {return $this->carga;}
        public function setCarga ($carga) {
            $this->carga=$carga;
            return $this;}

        public function pintarInfo () {
            return "<strong>Matrícula:</strong> ".$this->matricula."<br><strong>Marca: </strong>".$this->marca."<br><strong>Carga: </strong>".$this->carga."<br>";
        }
    }
?>