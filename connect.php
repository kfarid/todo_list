<?php
$host = 'localhost';
$db = 'todo';
$user= 'root';
$password = 'root';

$dsn = "mysql:host=$host;dbname=$db";
$opt= [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    $pdo= new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die('NOT FOUND :(:' . $e->getMessage());
}