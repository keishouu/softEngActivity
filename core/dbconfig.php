<?php  

$host = "localhost";
$user = "root";
$password = "";
$dbname = "bueno_new";
$dsn = "mysql:host={$host};dbname={$dbname}";
$pdo = new PDO($dsn, $user, $password);

?>