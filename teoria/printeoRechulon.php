<?php
    function printeoMono ($array, $nombre) {
        echo "<pre>FUNCIÓN ".strtoupper($nombre)."<br>";
        print_r($array);
        echo "</pre>";
    }

    function printeoDump ($array) {
        echo '<pre style="color: blue">ARRAY ORIGINAL<br>';
        var_dump($array);
        echo "</pre>";
    }

    function printeoCool ($array) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
?>