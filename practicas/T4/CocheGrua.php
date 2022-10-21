<?php
    class CocheGrua extends Coche
    {
        private $cocheCargado;

        public function getCocheCargado()
        {
                return $this->cocheCargado;
        }

        public function setCocheCargado($cocheCargado)
        {
                $this->cocheCargado = $cocheCargado;
                return $this;
        }

        public function cargar ($coche) {
            $this->cocheCargado=$coche;
        }
        public function descargar () {
            $this->cocheCargado=null;
        }

        public function pintarInfo () {
            $salida = parent::pintarInfo();
            $salida.=(is_object($this->cocheCargado))?"----> Lleva coche:<br>".$this->cocheCargado->pintarInfo():"No lleva ningun coche.";
            return $salida;
        }
    }
    
?>