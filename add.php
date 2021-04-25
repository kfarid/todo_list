<?php

$taskname = $_POST['taskname'];
if($taskname == '') {
    echo 'Ooops';
    exit();
}
require 'connect.php';

$sql = 'INSERT INTO todo(taskname) VALUES(:taskname)';
$query = $pdo->prepare($sql);
$query->execute(['taskname' => $taskname]);
header('Location: /');

?>
