<?php
    class UsuariosCopia
    {
        private $nombre;
        private $apellidos;
        private $deporte;

        private const maximo=6;
        private static $nivel=0;
        private $nivelJuego;
        private $historico=[];
        
        public function __construct ($nombre, $apellidos, $deporte) {
            $this->nombre=ucfirst($nombre);
            $this->apellidos=ucfirst($apellidos);
            $this->deporte=ucfirst($deporte);
            $this->nivelJuego=self::$nivel;
            echo "Usuario ".$this->nombre." creado.<br>";
        }

        public function getNombre() { return $this->nombre; }
        public function setNombre($nombre) { $this->nombre = ucfirst($nombre); return $this; }

        public function getApellidos() { return $this->apellidos; }
        public function setApellidos($apellidos){ $this->apellidos = ucfirst($apellidos);return $this; }
        
        public function getDeporte() { return $this->deporte; }
        public function setDeporte($deporte) { $this->deporte = ucfirst($deporte); return $this; }

        public function getNivelJuego() { return $this->nivelJuego; }
        public function setNivelJuego($nivelJuego=0) { $this->nivelJuego = self::$nivel; return $this; }
        
        public function setHistorico($historico) { 
            if ($historico=='victoria' || $historico=='derrota' || $historico=='empate'): 
                array_push($this->historico, $historico); 
            else: 
                echo "Parametro no admitido.";
            endif;
            
            return $this; 
        }
        public function getHistorico() { 
            $lista ="";
            foreach ($this->historico as $key => $value) {
                $lista .= "<li>Resultado ".++$key.": ".ucfirst($value)."</li>";
            }
            
            return "<ul>".$lista."</ul>";
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
                    if($contSubir==6 && $subir): 
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
            return "<p>-->Imprimir ".$this->nombre.":<br>Nombre: ".$this->nombre."<br/>Apellidos: ".$this->apellidos."<br/>Deporte: ".$this->deporte."<br/>Nivel Juego: ".$this->nivelJuego."<br/>Historico de partidos: ".$this->getHistorico()."</p>";
        }
    
    
    
    
    
    
    
    
    
    


    }
?>