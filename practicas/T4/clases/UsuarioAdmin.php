<?php
class UsuarioAdmin extends UsuariosCopia
{
    public function __construct ($nombre, $apellidos, $deporte) {
        parent::__construct($nombre." (Admin)", $apellidos, $deporte);
        $this->paseMax=3;
    }
    public function crearPartido () {
        return "Se ha creado un partido";
    }
}
?>