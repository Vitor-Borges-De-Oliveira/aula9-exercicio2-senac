<?php

$localhost = "localhost";
$username  = "root";
$password  = "";
$db        = "bdcurso2";

try {
    $connect= new PDO("mysql:host=$localhost;dbname=$db",$username,$password);
}

catch (PDOException $e) {
    echo "Conexão falha: ".$e->getMessage();
}