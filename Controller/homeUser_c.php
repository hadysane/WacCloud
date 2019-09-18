<?php 
include'start.php';
include'connect.php';

$result_files = $users->getFiles($_SESSION['id']); 

echo json_encode($result_files);