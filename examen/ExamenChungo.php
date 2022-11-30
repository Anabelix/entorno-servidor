<?php
    namespace examen;

    class ExamenChungo extends AExamen {
        /* use examen\IExamen; */
        const NOTA_MIN=0;
        const NOTA_MAX=7;

        public function obtenerNota() {
            return rand(self::NOTA_MIN, self::NOTA_MAX);
        }
    }
?>