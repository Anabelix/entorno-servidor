<?php
    namespace Elemento;
    class Objeto
    {
        use \Comun\Comun;
        private $peso;
        public function setPeso ($peso) {
            $this->peso=$peso;
        }
        public function getPeso () {
            return "Peso de: ".$this->peso."<br>";
        }
    }
?>