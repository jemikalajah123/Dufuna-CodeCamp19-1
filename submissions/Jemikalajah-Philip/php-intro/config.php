<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "mysql";
$dbname = "addProducts";
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
?>