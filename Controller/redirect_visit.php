<?php
require_once '../Controller/connect.php';

if (empty($_SESSION)){
    header('Location: ../index.php');
    exit();
}