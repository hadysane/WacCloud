<?php
include'start.php';
$errorMSG = "";

$info_user = $users->checkUser($_POST['username_login']);
$verifpassword = password_verify($_POST['password_login'], $info_user['password']);
if(isset($_POST)){
    foreach ($_POST as $key => $value) {
        if($key == "username_login" || $key == "password_login"){
            if (empty($value)){
                $errorMSG .= "<li> Fill ". $key . " field.</li>";
            } 
        } 
    }
    if($verifpassword == false){
        $errorMSG .= "<li>Username or password incorrect</li>";
    }

    if($info_user['active'] == 0){
        $errorMSG = "<li>Your account has been de-activated</li>";
    }
}
if(empty($errorMSG)){
    echo json_encode(true); 
    $users->connexMembre($info_user['username']);
} else {
    echo json_encode($errorMSG); 
}