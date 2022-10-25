<?php
class UsuarioAdmin extends Usuarios
{
    public function __construct ($nombre, $apellidos, $deporte) {
        parent::__construct($nombre." (Admin)", $apellidos, $deporte);
    }

    public function crearPartido () {
        return "Se ha creado un partido";
    }

    public function introResultado () {
        $subir = true;
        $contSubir=0;
        $bajar = true;
        $contBajar=0;
        foreach ($this->historico as $key => $value) {
            if ($value=='victoria'): 
                $contSubir++; $subir=true;
                if($contSubir==3 && $subir): 
                    $this->nivelJuego=++self::$nivel;
                    echo "Usuario ".$this->nombre." sube al nivel: ".$this->nivelJuego."<br>";
            endif;
            elseif ($value=='derrota'): 
                $contBajar++; $bajar=true;
                if($contBajar==6 && $bajar): 
                    $this->nivelJuego=--self::$nivel;
                    echo "Usuario ".$this->nombre." baja al nivel: ".$this->nivelJuego."<br>";
                endif;
            else:
                $contSubir=0; $subir = false; 
                $contBajar=0; $bajar = false;
            endif;
        }
    }

    public function imprimirInfo () {
        return "<p>".parent::imprimirInfo()."</p>";
    }
}


?>