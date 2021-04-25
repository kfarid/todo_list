<?php
require 'connect.php';

echo '<ul>';
$query = $pdo->query('SELECT * FROM todo ORDER BY id DESC');
while ($row = $query->fetch(PDO::FETCH_OBJ)) 
{
    echo '<li><b>'.$row->taskname.'<a href="/delete.php?id='.$row->id.'"><button class="btn btn-danger">delete</button></a></b></li>';
}
echo '</ul>';
