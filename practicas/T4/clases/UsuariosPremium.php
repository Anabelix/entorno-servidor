<?php
    class UsuariosPremium extends UsuariosCopia
    {
        public function __construct ($nombre, $apellidos, $deporte) {
            parent::__construct($nombre." (Premium)", $apellidos, $deporte);
            $this->paseMax=3;
        }
        
        public function imprimirInfo () {
            return "<p>".parent::imprimirInfo()."</p>";
        }
    }
?>  