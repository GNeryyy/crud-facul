<?php


$dbHost = "localhost:3306"; 
$dbUsername = "root"; 
$dbPassword = "root"; 
$dbName = "formulario"; 

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);  

$pdo = new PDO("mysql:dbname=".$dbName.";host".$dbHost, $dbUsername, $dbPassword);
?>