<?php
    class CocheConRemolque extends Coche
    {
        private $capacidadRemolque;

        public function getCapacidadRemolque() { return $this->capacidadRemolque; }
        public function setCapacidadRemolque($capacidadRemolque) { 
            $this->capacidadRemolque = $capacidadRemolque; 
            return $this->CapacidadRemolque;
        }

        public function pintarInfo () {
            return parent::pintarInfo()."<strong>Capacidad de remolque: </strong>".$this->capacidadRemolque;
        }
    }
    
?>