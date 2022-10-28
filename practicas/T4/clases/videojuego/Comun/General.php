<?php
    namespace Comun;
    trait General 
    {
        private $traitDescripcion;
        private $x;    
        private $y;    
        private $z;
        
        public function getX() { return "Posición X: ".$this->x." - "; }
        public function setX($x) {$this->x = $x; }
        public function getY() { return "Posición Y: ".$this->y." - "; }
        public function setY($y) {$this->y = $y; }
        public function getZ() { return "Posición Z: ".$this->z."<br>"; }
        public function setZ($z) {$this->z = $z; }
        
        public function setDescripcion ($descripcion) {
            $this->traitDescripcion=$descripcion;
        }
        public function getDescripcion () {
            return $this->traitDescripcion;
        }
    }
?>