<?php
class Config
{
    private $nombre;
    private static $instance;
    
    private function __construct($nombre="") {$this->nombre=$nombre;}
    
    // The singleton method
    public static function singleton()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function getNombre() {
        return self::$instance->nombre;
    }
    
    public function setNombre($nombre) {
        self::$instance->nombre = $nombre;
        
    }
}
?>