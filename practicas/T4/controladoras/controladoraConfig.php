<?php
require('../clases/Config.php');

    echo "Objeto Config original: ";
    print_r($config=Config::singleton());
    $config->setNombre("Anabelix.app");
    /*print "<br>Nombre de config tras hacer un set: ".$config->getNombre()."<br><br><br>";*/

    echo "<br><br>Objeto Config2: ";
    print_r($config2=Config::singleton());
    print "<br>Nombre de config2: ".$config2->getNombre()."<br><br>";

    echo "Objeto Config3: ";
    print_r($config3=Config::singleton());
    $config3->setNombre("anapedrajas.app");

    echo "<br>Modificacion de config con getNombre(): ";
    print_r($config3=Config::singleton());
    print "<br>Nombre de config3: ".$config3->getNombre()."<br><br>";
?>