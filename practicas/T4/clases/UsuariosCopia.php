<?php
    class UsuariosCopia
    {
        private $nombre;
        private $apellidos;
        private $deporte;
        private $historico=[];
        private $nivelJuego;

        private const MAXIMO=-6;
        protected $paseMax=6;

        public function __construct ($nombre, $apellidos, $deporte) {
            $this->nombre=ucfirst($nombre);
            $this->apellidos=ucfirst($apellidos);
            $this->deporte=ucfirst($deporte);
            $this->nivelJuego=0;
            echo "Usuario ".$this->nombre." creado.<br>";
        }

        public function getHistorico() { 
            $lista ="";
            foreach ($this->historico as $key => $value) {
                $lista .= "<li>Resultado ".++$key.": ".ucfirst($value)."</li>";
            }
            
            return "<ul>".$lista."</ul>";
        }
    
        public function introResultado ($historico) {
            if ($historico=='victoria' || 'derrota' || 'empate'): 
                array_push($this->historico, $historico);
                if ($historico=='victoria'): 
                    echo "El usuario ".$this->nombre." gana un partido<br>";
                elseif ($historico=='derrota'): 
                    echo "El usuario ".$this->nombre." pierde un partido<br>";
                else: 
                    echo "El usuario ".$this->nombre." empata un partido<br>";
                endif;
            
            else: 
                echo "Parametro no admitido.";
            endif;
            
            $nivel=0;
            $contSubir=0;
            $contBajar=0;
            foreach ($this->historico as $value) {
                if ($value=='victoria'): 
                    $contSubir++;
                    $contBajar=0;
                    if($contSubir==$this->paseMax):
                        $contSubir=0;
                        $this->nivelJuego=++$nivel;
                    endif;
                elseif ($value=='derrota'): 
                    $contBajar++;
                    $contSubir=0;
                    if($contBajar==self::MAXIMO):
                        $contBajar=0;
                        $this->nivelJuego=--$nivel;
                    endif;
                else:
                    $contSubir=0; 
                    $contBajar=0;
                endif;
            }
        }

        public function imprimirInfo () {
            return "<p>-->Imprimir ".$this->nombre.":<br>Nombre: ".$this->nombre."<br/>Apellidos: ".$this->apellidos."<br/>Deporte: ".$this->deporte."<br/>Nivel Juego: ".$this->nivelJuego."<br/>Historico de partidos: ".$this->getHistorico()."</p>";
        }
    
    
    
    
    
    
    
    
    
    


    }
?>