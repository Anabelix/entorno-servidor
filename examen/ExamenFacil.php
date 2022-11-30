<?php
    namespace examen;
    
    class ExamenFacil extends AExamen {
        
        const NOTA_MIN=5;
        const NOTA_MAX=10;

        public function obtenerNota() {
            return rand(self::NOTA_MIN, self::NOTA_MAX);
        }
    }
?>