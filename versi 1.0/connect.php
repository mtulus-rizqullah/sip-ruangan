<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "db_peminjaman"; 

$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>