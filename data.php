<?php 
    $server = "localhost";
    $username = "id18423124_user";
    $password = "Dc{(zB=hkO/y4?T4";
    $database = "id18423124_datos_svi";

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;" ,$username, $password);
    } catch(PDOException $e){
        die('Connected failed: ' . $e->getMessage());
    }
?>