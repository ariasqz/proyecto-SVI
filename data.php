<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "datos_svi";

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;" ,$username, $password);
    } catch(PDOException $e){
        die('Connected failed: ' . $e->getMessage());
    }
?>