<?php
require_once 'Controller/connect.php';

if (!empty($_SESSION)){
    header('Location: View/homeUser.php');
    exit();
} else {
    //header('Location: ./index.php');
}