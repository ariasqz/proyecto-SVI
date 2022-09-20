<?php 

function conn(){
    $host = "localhost";
    $userdb = "root";
    $passworddb = "";
    $dbname = "db";

    $conectar = mysqli_connect($host, $userdb, $passworddb, $dbname);
    return $conectar;
}
?>