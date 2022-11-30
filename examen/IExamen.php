<?php
    namespace examen;
    interface IExamen
    {
        public function intentar(string $cadena);
        public function obtenerNota():int;
    }
?>