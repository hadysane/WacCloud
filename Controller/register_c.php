<?php
include'start.php';
$errMSG = ""; 
$empty = 0;
$aValid = array('_', '-');

if(isset($_POST)){

    foreach ($_POST as $key => $item) {
        if (trim($item) == "" || empty($item)) {
            $empty = 1;
        }
        if ($key == 'username' && !empty($item)) {
            if (!ctype_alnum(str_replace($aValid, '', $item))) {
                $errMSG .= "<li>" . ucwords($key) . " contains non allowed characters</li>";
            }
        }
        if ($key == "email") {
            if (!filter_var($item, FILTER_VALIDATE_EMAIL)) {
                $errMSG .= "<li>Invalid email format</li>";
            }
        }
    }

    if ($empty == 1) {
        $errMSG .= "<li> Fill any empty field.</li>";
    }
    
    /**--Check Email--*/
    if ($users->email_exists($_POST['email']) == true) {
        $errMSG .= "<li>Email already exists.</li>";
    }
    
     /**--Check Username--*/
     if ($users->username_exists($_POST['username']) == true) {
        $errMSG .= "<li>Username already exists.</li>";
    }
    
    /**--Check password match--*/
    if ($_POST['password'] != $_POST['rpt_password']) {
        $errMSG .= "<li>Passwords do not match.</li>";
    }
    
    if (empty($errMSG)) {
        echo json_encode(true);
        $users->createUser($_POST['firstname'], $_POST['lastname'],$_POST['email'],$_POST['username'], password_hash($_POST['password'], PASSWORD_DEFAULT)); 
        
    } else {
        echo json_encode($errMSG);
    } 
    
}





