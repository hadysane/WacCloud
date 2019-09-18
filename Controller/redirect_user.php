<?php
require_once '../Controller/connect.php';

if (!empty($_SESSION['id'])){
    header('Location: ../View/homeUser.php');
    
    
} 