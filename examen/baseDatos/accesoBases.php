<?php
try {
    $dbname="examen";
    $user="examen";
    $password="examen";
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    $dbh = new PDO($dsn, $user, $password);

    
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
}
?>