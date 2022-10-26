<?php
    class UsuariosPremium extends UsuariosCopia
    {
        public function __construct ($nombre, $apellidos, $deporte) {
            parent::__construct($nombre." (Premium)", $apellidos, $deporte);
        }
        
        public function introResultado ($historico) {
            if ($historico=='victoria' || $historico=='derrota' || $historico=='empate'): 
                array_push($this->historico, $historico); 
            else: 
                echo "Parametro no admitido.";
            endif;

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