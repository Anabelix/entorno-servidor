<?php
    namespace examen;

    class ExamenHP extends AExamen {
        /* use examen\IExamen; */
        const NOTA_MIN=4;
        const NOTA_MAX=5;

        public function obtenerNota() {
            return rand(self::NOTA_MIN, self::NOTA_MAX);
        }
    }
?>