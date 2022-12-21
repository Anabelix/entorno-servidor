<?php
session_start();

if(!isset($_SESSION['user'])){
    header('Location: login.php?error=No implementado&url='.$_SERVER['REQUEST_URI']);
    exit;
}
?>