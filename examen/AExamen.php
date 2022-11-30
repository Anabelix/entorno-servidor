<?php
    namespace examen;
    use IExamen;
    
    abstract class AExamen implements IExamen {
        use TieneFecha;
        private $cadena;
        
        public function intentar(string $cadena) {
            $this->cadena=$cadena;
        }
    }
?>