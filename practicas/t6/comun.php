<?php
    $fondo;
    $letra;
    $name='Anonimo';
    if (isset($_COOKIE['fondo'])) {
        $fondo = $_COOKIE['fondo'];
    }
    if (isset($_COOKIE['letra'])) {
        $letra = $_COOKIE['letra'];
    }
    if (isset($_COOKIE['name'])) {
        $name = $_COOKIE['name'];
    }
    echo '
        <div class="contenedor">
            <h1>Esto NO se hace asi</h1>
            <h2>Se hace con sesiones</h2>
        </div>
        <footer>
            <a href="pagina1.php">pagina 1</a>
            <a href="pagina2.php">pagina 2</a>
            <a href="config.php">config</a>
            <span>'.$name.'</span>
        </footer>';
?>