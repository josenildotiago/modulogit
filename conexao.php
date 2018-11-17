<?php
$host = "localhos";
$user = "root";
$pass = "";
$db = "meu_bando_de_dados";
$dsn = "mysql:host={$host};dbname={$db}";
$options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
try{
    $conn = new PDO($dsn,$user,$pass,$options);
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>