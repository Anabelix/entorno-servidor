<?php
try {
    $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, // La preparación de las consultas no es simulada
                                               // más lento pero más seguro
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Cuando se produce un error
                                                                // salta una excepción
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Cuando traemos datos lo hacemos como array asociativo
    ];

    $dbname="mibasededatos";
    $user="anabel";
    $password="1234";
    $dsn = "mysql:host=localhost;dbname=$dbname;charset=utf8mb4";

    $dbh = new PDO($dsn, $user, $password);

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
}
?>