<?php 
session_start();
require_once 'start.php';
$errMSG = "";

if(isset($_POST)){
    /**--Check empty and valid--*/
    foreach ($_POST as $key => $value) {
        /** Check username */
        if($key == 'new_username' && !empty($value) ){
            if ($users->username_exists($value) == true) {
                $errMSG .= "<li>Username already exists.</li>";
            } else{
                $users->updateUsername(strip_tags(trim(strtolower($value))), $_SESSION['id']);
                $errMSG .= "<li> Username update.</li>";
            }
        }
        /** Check display name */
        if($key == "new_lastname" && !empty($value) ){
            $users->updateLastname(strip_tags(trim($value)), $_SESSION['id']);
            $errMSG .= "<li> Display lastname update.</li>";
        }    

         /** Check display name */
         if($key == "new_firstname" && !empty($value) ){
            $users->updateFirstname(strip_tags(trim($value)), $_SESSION['id']);
            $errMSG .= "<li> Display firstname update.</li>";
        }    
       
         /** Check email */ 
        if($key == 'email_updt' && !empty($value)) {
            if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                if($users->email_exists($value) == false) {
                    $users->updateEmail(strip_tags(trim($value)), $_SESSION['id']);
                    $errMSG .= "<li> Email update .</li>";
                } else {
                    $errMSG .= "<li>Email already exists.</li>";
                }
            } else {
                $errMSG .= "<li>Invalid email format</li>";
            }
        }
    }
}

echo json_encode($errMSG); 



