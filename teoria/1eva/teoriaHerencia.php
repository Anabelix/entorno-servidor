<?php
    //Crear una clase
    class Coche {
        //Propiedad
        private $color;
        private $potencia;
        private $marca;

        public function __construct ($color, $potencia, $marca) {
            $this->color=$color;
            $this->potencia=$potencia;
            $this->marca=$marca;
        }
        //Metodo
        public function getColor()
        {
            return $this->color;
            // Contenido de la función
        }


        public function setColor($color)
        {
                $this->color = $color;
                return $this;
        }
    }

    class CocheDeLujo extends Coche {
        public function __construct ($color, $potencia, $marca, $nombre) {
            parent::__construct($color, $potencia, $marca);
            $this->nombre=$nombre;
        }

        
    }

    $miCoche = new CocheDeLujo('rojo', 50, 'bmw', 'juan'); // Objeto

    //Llamar a una funcion
    $miCoche->setColor("Rojo");

    //De normal, las clases tienen atributos privados. Pero si es abstracta deberia ser protected para asi no repetir ese codigo.


    /*
    Public -> Todo el mundo puede acceder a lo que hay en esa clase publica.
    Private -> Solo se puede acceder a ella y manipularla la clase que la ha definido como privada. 

    Una clase puede heredar métodos y propiedades de otra clase, y éstos se pueden sobreescribir empleando el mismo nombre que en la clase madre.

    Cuando se define una propiedad como private, se indica que ésta no puede verse o modificarse a no ser que sea desde la propia clase. Si utilizamos $miCoche->potencia para verla o definirla, nos dará error. Si queremos definirla, se utiliza un setter, un método public para definir una propiedad private:
     */
?>