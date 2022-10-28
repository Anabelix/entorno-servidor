<?php
    namespace Elemento;
    
    class Edificio
    {
        use \Comun\Comun;
        private $altura;
        public function setAltura ($altura) {
            $this->altura=$altura;
        }
        public function getAltura () {
            return "Altura de: ". $this->altura."<br>";
        }
    }
?>