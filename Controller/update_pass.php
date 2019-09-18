<?php
require_once 'start.php';
include 'connect.php';
$errMSG = ""; 
/*--Check Login pass--*/

$password = $users->checkUser($_SESSION['username']);

/**--Check password match--*/
if(isset($_POST)){
    if ($_POST['password_updt'] != $_POST['confirm_pass_updt']) {
        $errMSG .= "<li>Passwords do not match.</li>";
    } 
    if (password_verify($_POST['password_updt'], $password['password']) == true){
        $errMSG .= "<li>Passwords no change.</li>";
    }

    if(empty($errMSG)){
        echo json_encode(true); 
        $users->updatePass( password_hash($_POST['password_updt'], PASSWORD_DEFAULT), $_SESSION['id']);
        exit;
    } else {
        echo json_encode($errMSG); 
    }
}

