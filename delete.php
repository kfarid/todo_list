<?php
require 'connect.php';

$id = $_GET['id'];

$sql = 'DELETE FROM todo WHERE id =?';
$query = $pdo->prepare($sql);
$query->execute([$id]);

header('Location:/');  