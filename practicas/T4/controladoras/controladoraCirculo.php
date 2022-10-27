<?php
    require('../clases/Circulo.php');
    $circulo1 = new Circulo();
    $circulo1->setRadio(2);
    print "Radio: ".$circulo1->getRadio()."<br>";
    print "Área: ".$circulo1->getArea();
?>