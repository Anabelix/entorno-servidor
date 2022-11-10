<?php
namespace ClasesTipo;
class Numero extends Atipo {
    private $numero;
    public function __construct () {
        validarGeneral($num);
        validarEspecifico($num);
    }

    public function getNumero() { return $this->numero; }
    public function setNumero($numero) { $this->numero = $numero; }

    function validarEspecifico (int $num) {
        cleanData($num);
        if ($num>=0 && $num<=5): $this->numero=$num;
        else: echo "Fuera del rango permitido, debe estar entre 0 y 5 ambos incluídos";
        endif;
    }
}

?>