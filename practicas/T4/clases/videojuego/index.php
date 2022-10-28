<?php

    spl_autoload_register(function ($class) {
        $classPath = "./";
        $file = str_replace('\\', '/', $class);
        require("$classPath/${file}.php");
    });

    $personaje1 = new Personajes\Humano();
    $personaje1->setX("10");
    $personaje1->setY("0");
    $personaje1->setZ("0");
    print $personaje1->atacar();
    print $personaje1->defender();
    print $personaje1->getX();
    print $personaje1->getY();
    print $personaje1->getZ();
    echo "<hr>";

    $personaje2 = new MagoBlanco();
    $personaje2->setX("5");
    $personaje2->setY("0");
    $personaje2->setZ("5");
    print $personaje2->atacar();
    print $personaje2->defender();
    print $personaje2->getX();
    print $personaje2->getY();
    print $personaje2->getZ();
    echo "<hr>";

    /*$personaje3 = new MagoOscuro();
    $personaje3->setX("1");
    $personaje3->setY("0");
    $personaje3->setZ("1");
    print $personaje3->atacar();
    print $personaje3->defender();
    print $personaje3->getX();
    print $personaje3->getY();
    print $personaje3->getZ();
    echo "<hr>";

    $objeto = new Objeto();
    $objeto->setDescripcion("Este objeto es un armario: <br>");
    $objeto->setPeso("30kg");
    $objeto->setX("12");
    $objeto->setY("8");
    $objeto->setZ("4");
    print $objeto->getDescripcion();
    print $objeto->getPeso();
    print $objeto->getX();
    print $objeto->getY();
    print $objeto->getZ();
    echo "<hr>";

    $edificio = new Edificio();
    $edificio->setDescripcion("Este edificio tiene cinco pisos: <br>");
    $edificio->setAltura("38 metros");
    $edificio->setX("20");
    $edificio->setY("10");
    $edificio->setZ("0");
    print $edificio->getDescripcion();
    print $edificio->getAltura();
    print $edificio->getX();
    print $edificio->getY();
    print $edificio->getZ();
    echo "<hr>";*/
?>