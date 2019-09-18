<?php
include'start.php';
include'connect.php';
$errorsMSG = ""; 

if (isset($_POST['submit'])){
    $file = $_FILES['upload_item'];
    $fileName = $_FILES['upload_item']['name'];
    $fileTmpName = $_FILES['upload_item']['tmp_name'];
    $fileSize = $_FILES['upload_item']['size'];
    $fileError = $_FILES['upload_item']['error'];
    $fileType = $_FILES['upload_item']['type'];

    if(empty($file)){
        $errorsMSG .= "file not found !";
    }

    if($fileError != 0){
        $errorsMSG .= "There was an error uploading your file !";
    } else {
        $fileDestination = '../uploads/'.$fileName; 
        move_uploaded_file($fileTmpName, $fileDestination);
    }
    if(empty($errorsMSG)){
        echo json_encode(true); 
        $users->addfile($_SESSION['id'], $fileName, $fileType, $fileSize, $fileDestination);
    } else {
        echo json_encode($errorsMSG);
    }
    
}