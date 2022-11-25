<?php
try {
    $dbname="mibasededatos";
    $user="anabel";
    $password="1234";
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